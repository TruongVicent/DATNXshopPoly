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
    const minRangeInput = document.getElementById('minRangeInput');
    const maxRangeInput = document.getElementById('maxRangeInput');
    const applyButton = document.querySelector('.apply-button');

    applyButton.addEventListener('click', function () {
        const minValue = parseFloat(minRangeInput.value);
        const maxValue = parseFloat(maxRangeInput.value);

        if (isNaN(minValue) || isNaN(maxValue) || minValue < 0 || maxValue < 0 || minValue > maxValue) {
            alert('Invalid input! Please enter valid price range.');
            return;
        }
        filterProductsByPrice(minValue, maxValue);
    });

    function filterProductsByPrice(minValue, maxValue) {

    }
});
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector('#productColumn').style.display = 'block';
    document.querySelector('#productGrid').style.display = 'none';
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
    document.querySelectorAll('.dropdown-item').forEach(function (item) {
        item.addEventListener('click', function (event) {
            event.preventDefault();
            var itemsPerPage = this.getAttribute('data-value');
            var currentUrl = window.location.href;
            var newUrl = currentUrl.replace(/(\?|&)items_per_page=\d+/gi, ''); // Xóa tham số items_per_page hiện tại trong URL
            if (newUrl.includes('?')) {
                newUrl += '&items_per_page=' + itemsPerPage;
            } else {
                newUrl += '?items_per_page=' + itemsPerPage;
            }
            window.location.href = newUrl;
        });
    });
});
var categoryList = document.querySelector('.categories-list');
var categoryItems = categoryList.querySelectorAll('li');

categoryItems.forEach(function (item) {
    item.addEventListener('click', function () {
        var categoryId = this.getAttribute('data-category');
        filterProductsByCategory(categoryId);
    });
});

function filterProductsByCategory(categoryId) {
    var productCards = document.getElementsByClassName('product-card');
    for (var i = 0; i < productCards.length; i++) {
        var productCard = productCards[i];
        var category = productCard.getAttribute('data-category');

        if (categoryId === 'all' || category === categoryId) {
            productCard.style.display = 'block';
        } else {
            productCard.style.display = 'none';
        }
    }
}












