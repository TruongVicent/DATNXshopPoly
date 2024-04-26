@extends('index')
@section('main')

    <div class="main">
        <div class="container pb-5">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-md-3 sidebar">
                        <div class="accordion accordion-flush" id="accordionFlush">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                        Categories
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionFlush1">
                                    <div class="accordion-body">
                                        <a href="">Mobile accessory</a>
                                        <a href="">Electronics</a>
                                        <a href="">Smartphones</a>
                                        <a href="">Modern tech</a>
                                        <button class="seeAllButton" id="seeAllButtonCategories">See All</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                        Brands
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionFlush2">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="samsungCheckbox">
                                            <label class="form-check-label" for="samsungCheckbox">
                                                SamSung
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="appleCheckbox">
                                            <label class="form-check-label" for="appleCheckbox">
                                                Apple
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="huaweiCheckbox">
                                            <label class="form-check-label" for="huaweiCheckbox">
                                                Huawei
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="poccoCheckbox">
                                            <label class="form-check-label" for="poccoCheckbox">
                                                Pocco
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="lenovoCheckbox">
                                            <label class="form-check-label" for="lenovoCheckbox">
                                                Lenovo
                                            </label>
                                        </div>
                                        <button class="seeAllButton" id="seeAllButtonBrands">See All</button>
                                    </div>
                                </div>

                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFeatures" aria-expanded="false"
                                            aria-controls="flush-collapseFeatures">
                                        Features
                                    </button>
                                </h2>
                                <div id="flush-collapseFeatures" class="accordion-collapse collapse"
                                     data-bs-parent="#accordionFlushFeatures">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="metallicCheckbox">
                                            <label class="form-check-label" for="metallicCheckbox">
                                                Metallic
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="plasticCheckbox">
                                            <label class="form-check-label" for="plasticCheckbox">
                                                Plastic cover
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ramCheckbox">
                                            <label class="form-check-label" for="ramCheckbox">
                                                8GB Ram
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="powerCheckbox">
                                            <label class="form-check-label" for="powerCheckbox">
                                                Super power
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="memoryCheckbox">
                                            <label class="form-check-label" for="memoryCheckbox">
                                                Large Memory
                                            </label>
                                        </div>
                                        <button class="seeAllButton" id="seeAllButtonFeatures">See All</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsePrice" aria-expanded="false"
                                            aria-controls="flush-collapsePrice">
                                        Price range
                                    </button>
                                </h2>
                                <div id="flush-collapsePrice" class="accordion-collapse collapse"
                                     data-bs-parent="#accordioncollapsePrice">
                                    <div class="accordion-body">

                                        <div class="range-slider">
                                            <input type="range" class="form-range" min="0" max="5" value="0" step="1" id="customRange2">
                                        </div>
                                        <div class="range-inputs">
                                            <input type="number" class="form-control small-input" id="minRangeInput" placeholder="0">
                                            <input type="number" class="form-control small-input" id="maxRangeInput" placeholder="999999999 ">
                                        </div>
                                        <button class="apply-button">Apply</button>
                                    </div>

                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseCondition" aria-expanded="false"
                                            aria-controls="flush-collapseCondition">
                                        Condition
                                    </button>
                                </h2>
                                <div id="flush-collapseCondition" class="accordion-collapse collapse"
                                     data-bs-parent="#accordioncollapseCondition">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Any
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Refurbished
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Brand new
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Old items
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseRating" aria-expanded="false"
                                            aria-controls="flush-collapseRating">
                                        Ratings
                                    </button>
                                </h2>
                                <div id="flush-collapseRating" class="accordion-collapse collapse"
                                     data-bs-parent="#accordioncollapseRating">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="5" id="star5">
                                            <label class="form-check-label" for="star5">
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4" id="star4">
                                            <label class="form-check-label" for="star4">
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star-gray"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3" id="star3">
                                            <label class="form-check-label" for="star3">
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star-gray"></i>
                                                <i class="fa fa-star star-gray"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2" id="star2">
                                            <label class="form-check-label" for="star2">
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star-gray"></i>
                                                <i class="fa fa-star star-gray"></i>
                                                <i class="fa fa-star star-gray"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="star1">
                                            <label class="form-check-label" for="star1">
                                                <i class="fa fa-star star"></i>
                                                <i class="fa fa-star star-gray"></i>
                                                <i class="fa fa-star star-gray"></i>
                                                <i class="fa fa-star star-gray"></i>
                                                <i class="fa fa-star star-gray"></i>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 content">
                        <div class="content-top">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center"> 12,911 items in&nbsp; <strong> Mobile
                                            accessory</strong></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="checkbox" value="" id="verifiedCheckbox">
                                            <label class="form-check-label" for="verifiedCheckbox">
                                                Verified only
                                            </label>
                                        </div>
                                        <div class="form-group me-3">
                                            <select class="form-select" id="featuredSelect">
                                                <option>Featured</option>
                                                <option>Not Featured</option>
                                            </select>
                                        </div>
                                        <div class="btn-group me-3">
                                            <div id="gridButton" onclick="switchView('grid')"><i
                                                    class="bi bi-grid-3x3-gap-fill"></i></div>
                                            <div id="columnButton" onclick="switchView('column')"><i class="bi bi-list"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filters-applied">
                            <button class="filter-btn">Samsung <i class="bi bi-x"></i></button>
                            <button class="filter-btn">Apple <i class="bi bi-x"></i></button>
                            <button class="seeAllButton" id="Clearallfilter">Clear all filter</button>
                        </div>
                        <div class="product">
                            <div id="productGrid" class="product-grid">
                                <div class="row">
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-4">
                                        <div class="product-card">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price-item">
                                                    <div class="price-item">
                                                        <div class="product-price">$99.99
                                                            <div class="product-price-discounted">$99.50</div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>

                                                </div>
                                                <p class="product-title">GoPro HERO6 4K</p>
                                                <p class="product-title">Action Camera - Black</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="productColumn" class="product-column">
                                <div class="product-card mb-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="product-info">
                                                <div class="product-title-item">
                                                    <p class="product-title">Canon Cmera EOS 2000, Black 10x zoom</p>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="price-item">
                                                    <div class="product-price">$99.99
                                                        <div class="product-price-discounted">$99.50</div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="star">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="number-star">
                                                            7.5
                                                        </div>
                                                        <div class="order">
                                                            145 Orders
                                                        </div>
                                                        <div class="shipping">
                                                            Free Ship
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="product-description">Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Duis
                                                    aute irure dolor in reprehenderit </p>
                                                <div class="view-detail">
                                                    <a href="">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card mb-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="product-info">
                                                <div class="product-title-item">
                                                    <p class="product-title">Canon Cmera EOS 2000, Black 10x zoom</p>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="price-item">
                                                    <div class="product-price">$99.99
                                                        <div class="product-price-discounted">$99.50</div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="star">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="number-star">
                                                            7.5
                                                        </div>
                                                        <div class="order">
                                                            145 Orders
                                                        </div>
                                                        <div class="shipping">
                                                            Free Ship
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="product-description">Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Duis
                                                    aute irure dolor in reprehenderit </p>
                                                <div class="view-detail">
                                                    <a href="">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card mb-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="product-info">
                                                <div class="product-title-item">
                                                    <p class="product-title">Canon Cmera EOS 2000, Black 10x zoom</p>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="price-item">
                                                    <div class="product-price">$99.99
                                                        <div class="product-price-discounted">$99.50</div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="star">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="number-star">
                                                            7.5
                                                        </div>
                                                        <div class="order">
                                                            145 Orders
                                                        </div>
                                                        <div class="shipping">
                                                            Free Ship
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="product-description">Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Duis
                                                    aute irure dolor in reprehenderit </p>
                                                <div class="view-detail">
                                                    <a href="">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card mb-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="product-info">
                                                <div class="product-title-item">
                                                    <p class="product-title">Canon Cmera EOS 2000, Black 10x zoom</p>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="price-item">
                                                    <div class="product-price">$99.99
                                                        <div class="product-price-discounted">$99.50</div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="star">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="number-star">
                                                            7.5
                                                        </div>
                                                        <div class="order">
                                                            145 Orders
                                                        </div>
                                                        <div class="shipping">
                                                            Free Ship
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="product-description">Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Duis
                                                    aute irure dolor in reprehenderit </p>
                                                <div class="view-detail">
                                                    <a href="">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card mb-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="product-info">
                                                <div class="product-title-item">
                                                    <p class="product-title">Canon Cmera EOS 2000, Black 10x zoom</p>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="price-item">
                                                    <div class="product-price">$99.99
                                                        <div class="product-price-discounted">$99.50</div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="star">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="number-star">
                                                            7.5
                                                        </div>
                                                        <div class="order">
                                                            145 Orders
                                                        </div>
                                                        <div class="shipping">
                                                            Free Ship
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="product-description">Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Duis
                                                    aute irure dolor in reprehenderit </p>
                                                <div class="view-detail">
                                                    <a href="">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card mb-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <div class="product-img"><a href="index.html"><img src="{{ asset('image/imgproduct3.png') }}"
                                                                                               alt="Product 1 Image"></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="product-info">
                                                <div class="product-title-item">
                                                    <p class="product-title">Canon Cmera EOS 2000, Black 10x zoom</p>
                                                    <div class="product-favorite d-flex align-items-center">
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="price-item">
                                                    <div class="product-price">$99.99
                                                        <div class="product-price-discounted">$99.50</div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="star">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="number-star">
                                                            7.5
                                                        </div>
                                                        <div class="order">
                                                            145 Orders
                                                        </div>
                                                        <div class="shipping">
                                                            Free Ship
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="product-description">Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Duis
                                                    aute irure dolor in reprehenderit </p>
                                                <div class="view-detail">
                                                    <a href="">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-menu">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle n" type="button" id="showDropdown2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Show 9
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="showDropdown">
                                        <li><a class="dropdown-item" href="#" data-value="9">Show 9</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="10">Show 10</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="12">Show 12</a></li>
                                    </ul>
                                </div>
                                <nav aria-label="Page navigation example pb-4">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
    </script>
@endsection
{{--update--}}
