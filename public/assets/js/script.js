// ---------------
// count down
// ---------------


let dateupto = new Date("Sep 30, 2024 23:59:59:999");

if (dateupto < new Date()) {
    $("#countdown").hide();
    $("#countdownbtn").hide();
    $("#normalbtn").show();
} else {
    $("#countdown").show();
    $("#normalbtn").hide();
}


let $days = document.getElementById('days');
let $hours = document.getElementById('hours');
let $minutes = document.getElementById('minutes');
let $seconds = document.getElementById('seconds');

setInterval(function () {
    // Calculate the remaining time
    var now = new Date();
    var timeLeft = (dateupto - now) / 1000;
    updateClock(timeLeft);
}, 1000);

function updateClock(remainingTime) {
    // calculate (and subtract) whole days
    let days = Math.floor(remainingTime / 86400);
    remainingTime -= days * 86400;

    // calculate (and subtract) whole hours
    let hours = Math.floor(remainingTime / 3600) % 24;
    remainingTime -= hours * 3600;

    // calculate (and subtract) whole minutes
    let minutes = Math.floor(remainingTime / 60) % 60;
    remainingTime -= minutes * 60;

    // what's left is seconds
    let seconds = Math.floor(remainingTime % 60);

    // pad numbers if needed
    $days.innerHTML = padNumber(days);
    $hours.innerHTML = padNumber(hours);
    $minutes.innerHTML = padNumber(minutes);
    $seconds.innerHTML = padNumber(seconds);
}

function padNumber(number) {
    return number < 10 ? "0" + number : number;
}


// ---------------
// change image
// ---------------
function changeImg(pic) {
    document.getElementById('change_image').src = pic;
}
document.addEventListener('DOMContentLoaded', function () {
    const clearAllButton = document.getElementById('Clearallfilter');
    clearAllButton.style.display = 'none';
});

//Chuyển đổi hiển thị dạng cột và dạng mảng
window.addEventListener('DOMContentLoaded', function () {
    var gridButton = document.getElementById('gridButton');
    var columnButton = document.getElementById('columnButton');
    var productGrid = document.getElementById('productGrid');
    var productColumn = document.getElementById('productColumn');

    gridButton.disabled = true;
    columnButton.disabled = false;
    productGrid.style.display = 'block';
    productColumn.style.display = 'none';

    gridButton.addEventListener('click', function () {
        gridButton.disabled = true;
        columnButton.disabled = false;
        productGrid.style.display = 'block';
        productColumn.style.display = 'none';
    });

    columnButton.addEventListener('click', function () {
        gridButton.disabled = false;
        columnButton.disabled = true;
        productGrid.style.display = 'none';
        productColumn.style.display = 'block';
    });
});
//Phân trang
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.phanTrang').forEach(function (item) {
        item.addEventListener('click', function (event) {
            event.preventDefault();
            var itemsPerPage = this.getAttribute('data-value');
            var currentUrl = window.location.href;
            var newUrl = currentUrl.replace(/(\?|&)items_per_page=\d+/gi, '');
            if (newUrl.includes('?')) {
                newUrl += '&items_per_page=' + itemsPerPage;
            } else {
                newUrl += '?items_per_page=' + itemsPerPage;
            }
            window.location.href = newUrl;
        });
    });
});
// Ẩn nút "Quay lại" ban đầu
document.getElementById('backToTopCategories').style.display = 'none';
document.getElementById('backToTopBrands').style.display = 'none';

document.getElementById('seeAllButtonCategories').addEventListener('click', function () {
    var categoryItems = document.querySelectorAll('.category-item');
    categoryItems.forEach(function (item) {
        item.style.display = 'block';
    });
    // Hiển thị nút "Quay lại" và ẩn nút "Xem Tất Cả"
    document.getElementById('backToTopCategories').style.display = 'inline-block';
    this.style.display = 'none';
});

document.getElementById('seeAllButtonBrands').addEventListener('click', function () {
    var brandCheckboxes = document.querySelectorAll('.form-check');
    brandCheckboxes.forEach(function (checkbox) {
        checkbox.style.display = 'block';
    });
    // Hiển thị nút "Quay lại" và ẩn nút "Xem Tất Cả"
    document.getElementById('backToTopBrands').style.display = 'inline-block';
    this.style.display = 'none';
});

document.getElementById('backToTopCategories').addEventListener('click', function () {
    var categoryItems = document.querySelectorAll('.category-item');
    categoryItems.forEach(function (item, index) {
        if (index >= 5) {
            item.style.display = 'none';
        }
    });
    // Hiển thị nút "Xem Tất Cả" và ẩn nút "Quay lại"
    document.getElementById('seeAllButtonCategories').style.display = 'inline-block';
    this.style.display = 'none';
});

document.getElementById('backToTopBrands').addEventListener('click', function () {
    var brandCheckboxes = document.querySelectorAll('.form-check');
    brandCheckboxes.forEach(function (checkbox, index) {
        if (index >= 5) {
            checkbox.style.display = 'none';
        }
    });
    // Hiển thị nút "Xem Tất Cả" và ẩn nút "Quay lại"
    document.getElementById('seeAllButtonBrands').style.display = 'inline-block';
    this.style.display = 'none';
});

//bộ lọc
document.addEventListener('DOMContentLoaded', function () {
    const categoryLinks = document.querySelectorAll('.category-link');
    categoryLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const categoryId = this.parentElement.getAttribute('data-category');
            clearCategoryFilters();
            updateAppliedFilters('category', this.innerText, categoryId);
            filterProducts();
        });
    });

    function filterProducts() {
        const selectedCategory = document.querySelector('.filters-applied .filter-btn[data-filter-type="category"]');
        const selectedBrands = Array.from(document.querySelectorAll('.brand-checkbox:checked')).map(cb => cb.value);
        const categoryId = selectedCategory ? selectedCategory.getAttribute('data-filter-value') : 'all';

        const allProducts = document.querySelectorAll('.product-item');

        let anyProductDisplayed = false; // Flag to track if any product is displayed

        allProducts.forEach(product => {
            const productCategory = product.getAttribute('data-category');
            const productBrand = product.getAttribute('data-brand');

            const matchesCategory = categoryId === 'all' || productCategory === categoryId;
            const matchesBrand = selectedBrands.length === 0 || selectedBrands.includes(productBrand);

            if (matchesCategory && (selectedBrands.length === 0 || matchesBrand)) {
                product.style.display = '';
                anyProductDisplayed = true; // Set flag to true if any product is displayed
            } else {
                product.style.display = 'none';
            }
        });

        if (!anyProductDisplayed) {
            // No product displayed, show the message
            document.getElementById('noProductMessage').style.display = 'block';
        } else {
            // Products are displayed, hide the message
            document.getElementById('noProductMessage').style.display = 'none';
        }

        checkAndRemoveEmptyFilterGroup();
    }

    function checkAndDisplayNoProductMessage() {
        const productGrid = document.getElementById('productGrid');
        const productColumn = document.getElementById('productColumn');
        const noProductMessage = document.getElementById('noProductMessage');

        const displayedProducts = document.querySelectorAll('.product-item[style*="display:"]');

        if (displayedProducts.length === 0) {
            productGrid.style.display = 'none';
            productColumn.style.display = 'none';
            noProductMessage.style.display = ''; // Hiển thị thông báo
        } else {
            productGrid.style.display = '';
            productColumn.style.display = '';
            noProductMessage.style.display = 'none'; // Ẩn thông báo
        }
    }

    const seeAllButtonBrands = document.getElementById('seeAllButtonBrands');
    seeAllButtonBrands.addEventListener('click', function () {
        const hiddenBrandItems = document.querySelectorAll('.form-check[style*="display:none;"]');
        hiddenBrandItems.forEach(item => item.style.display = '');
        this.style.display = 'none';
    });

    const brandCheckboxes = document.querySelectorAll('.brand-checkbox');
    brandCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            updateAppliedFilters('brand', this.nextElementSibling.innerText, this.value);
            filterProducts();
        });
    });

    function updateAppliedFilters(type, name, value) {
        const filtersApplied = document.querySelector('.filters-applied');
        const existingFilterBtn = filtersApplied.querySelector(`.filter-btn[data-filter-type="${type}"][data-filter-value="${value}"]`);

        if (!existingFilterBtn) {
            const filterBtn = document.createElement('button');
            filterBtn.className = 'filter-btn';
            filterBtn.setAttribute('data-filter-type', type);
            filterBtn.setAttribute('data-filter-name', name);
            filterBtn.setAttribute('data-filter-value', value);
            filterBtn.innerHTML = `${name} <i class="bi bi-x"></i>`;
            filterBtn.addEventListener('click', function () {
                this.remove();
                if (type === 'brand') {
                    document.querySelector(`.brand-checkbox[value="${value}"]`).checked = false;
                } else if (type === 'category') {
                    clearCategoryFilters();
                }
                filterProducts();
                checkAndRemoveEmptyFilterGroup();
            });
            filtersApplied.insertBefore(filterBtn, document.getElementById('Clearallfilter'));
        } else if (type === 'brand' && !document.querySelector(`.brand-checkbox[value="${value}"]`).checked) {
            existingFilterBtn.remove();
        }
        checkAndRemoveEmptyFilterGroup();
    }

    // Xóa tất cả bộ lọc
    const clearAllButton = document.getElementById('Clearallfilter');
    clearAllButton.addEventListener('click', function () {
        document.querySelectorAll('.filter-btn').forEach(btn => btn.remove());
        brandCheckboxes.forEach(checkbox => checkbox.checked = false);
        clearCategoryFilters();
        filterProducts();
    });

    function checkAndRemoveEmptyFilterGroup() {
        const filtersApplied = document.querySelector('.filters-applied');
        if (filtersApplied.querySelectorAll('.filter-btn').length === 0) {
            filtersApplied.querySelector('#Clearallfilter').style.display = 'none';
        } else {
            filtersApplied.querySelector('#Clearallfilter').style.display = '';
        }
    }

    // Hàm xóa các bộ lọc danh mục
    function clearCategoryFilters() {
        const filtersApplied = document.querySelector('.filters-applied');
        filtersApplied.querySelectorAll('.filter-btn[data-filter-type="category"]').forEach(btn => btn.remove());
    }

    checkAndRemoveEmptyFilterGroup();
});


















