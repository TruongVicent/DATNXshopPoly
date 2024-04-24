@extends('index')
@section('main')
    <main class="main">
        <div class="intro-section pt-3 pb-3 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio mb-2 mb-lg-0">
                            <div class="intro-slider owl-carousel owl-simple owl-dark owl-nav-inside" data-toggle="owl" data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "responsive": {
                                            "768": {
                                                "nav": true,
                                                "dots": false
                                            }
                                        }
                                    }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{ asset('Home/assets/images/demos/demo-3/slider/slide-1-480w.jpg') }}">
                                            <img src="{{ asset('Home/assets/images/demos/demo-3/slider/slide-1.jpg') }}" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle text-primary">Daily Deals</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">
                                            AirPods <br>Earphones
                                        </h1><!-- End .intro-title -->

                                        <div class="intro-price">
                                            <sup>Today:</sup>
                                            <span class="text-primary">
                                                    $247<sup>.99</sup>
                                                </span>
                                        </div><!-- End .intro-price -->

                                        <a href="category.html" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{ asset('Home/assets/images/demos/demo-3/slider/slide-2-480w.jpg') }}">
                                            <img src="{{ asset('Home/assets/images/demos/demo-3/slider/slide-2.jpg') }}" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle text-primary">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">
                                            Echo Dot <br>3rd Gen
                                        </h1><!-- End .intro-title -->

                                        <div class="intro-price">
                                            <sup class="intro-old-price">$49,99</sup>
                                            <span class="text-primary">
                                                    $29<sup>.99</sup>
                                                </span>
                                        </div><!-- End .intro-price -->

                                        <a href="category.html" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->

                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="{{ asset('Home/assets/images/demos/demo-3/banners/banner-1.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Top Product</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Edifier <br>Stereo Bluetooth</a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="{{ asset('Home/assets/images/demos/demo-3/banners/banner-2.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">GoPro - Fusion 360 <span>Save $70</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner mb-0">
                                <a href="#">
                                    <img src="{{ asset('Home/assets/images/demos/demo-3/banners/banner-3.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Featured</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Apple Watch 4 <span>Our Hottest Deals</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .intro-section -->
    </main><!-- End .main -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    <li><a href="index-9.html">09 - fashion store</a></li>
                                    <li><a href="index-10.html">10 - shoes store</a></li>
                                    <li><a href="index-11.html">11 - furniture simple store</a></li>
                                    <li><a href="index-12.html">12 - fashion simple store</a></li>
                                    <li><a href="index-13.html">13 - market</a></li>
                                    <li><a href="index-14.html">14 - market fullwidth</a></li>
                                    <li><a href="index-15.html">15 - lookbook 1</a></li>
                                    <li><a href="index-16.html">16 - lookbook 2</a></li>
                                    <li><a href="index-17.html">17 - fashion store</a></li>
                                    <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                    <li><a href="index-19.html">19 - games store</a></li>
                                    <li><a href="index-20.html">20 - book store</a></li>
                                    <li><a href="index-21.html">21 - sport store</a></li>
                                    <li><a href="index-22.html">22 - tools store</a></li>
                                    <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                    <li><a href="index-24.html">24 - extreme sport store</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                    <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                    <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                    <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                    <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="product.html">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about.html">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html">Elements</a>
                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

   @include('includes.login')
    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{ asset('image/logo-doanvth-pro 1.png') }}" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="{{ asset('Home/assets/images/popup/newsletter/img-1.jpg') }}" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Main body--}}
    <div class="main">
        <div class="container">
            <!-- section sale -->
            <div class="section-sale">
                <div class="d-grid sale-group">
                    <div class="group-left">
                        <div data-animation="fadeInLeft" data-delay="0.8s" id="countdown">
                            <div class="card border-0">
                                <div class="box-content">
                                    <h5 class="card-title mb-0">
                                        Deals and offers
                                    </h5>
                                    <div class="card-text">
                                        Hygiene equipment
                                    </div>
                                </div>

                                <div class="box-countdown  d-flex flex-wrap">
                                    <div class="countdown">
                                        <div id="days" class="value">00</div>
                                        <div class="countdown_label">Days</div>
                                    </div>
                                    <div class="countdown">
                                        <div id="hours" class="value">00</div>
                                        <div class="countdown_label">Hours</div>
                                    </div>
                                    <div class="countdown">
                                        <div id="minutes" class="value">00</div>
                                        <div class="countdown_label">Min</div>
                                    </div>
                                    <div class="countdown">
                                        <div id="seconds" class="value">00</div>
                                        <div class="countdown_label">Sec</div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="group-right">
                        <div class=" autoplay">
                            <div class="sale-item text-center">
                                <div class="box-img d-flex justify-content-center">
                                    <a href=""><img src="{{ asset('image/img2.jpg') }}" alt=""></a>
                                </div>
                                <div class="box-info ">
                                    <div class="title-product">Smart watches</div>
                                    <span class="badge  rounded-pill text-danger bg-danger-subtle">-15%</span>
                                </div>
                            </div>
                            <div class="sale-item text-center">
                                <div class="box-img d-flex justify-content-center">
                                    <a href=""><img src="{{ asset('image/img2.jpg') }}" alt=""></a>
                                </div>
                                <div class="box-info ">
                                    <div class="title-product">Smart watches</div>
                                    <span class="badge  rounded-pill text-danger bg-danger-subtle">-15%</span>
                                </div>
                            </div>
                            <div class="sale-item text-center">
                                <div class="box-img d-flex justify-content-center">
                                    <a href=""><img src="{{ asset('image/img2.jpg') }}" alt=""></a>
                                </div>
                                <div class="box-info ">
                                    <div class="title-product">Smart watches</div>
                                    <span class="badge  rounded-pill text-danger bg-danger-subtle">-15%</span>
                                </div>
                            </div>
                            <div class="sale-item ">
                                <div class="box-img d-flex justify-content-center">
                                    <a href=""><img src="{{ asset('image/img2.jpg') }}" alt=""></a>
                                </div>
                                <div class="box-info text-center">
                                    <div class="title-product">Smart watchesss</div>
                                    <span class="badge  rounded-pill text-danger bg-danger-subtle">-15%</span>
                                </div>
                            </div>
                            <div class="sale-item text-center">
                                <div class="box-img d-flex justify-content-center">
                                    <a href=""><img src="{{ asset('image/image35.png') }}" alt=""></a>
                                </div>
                                <div class="box-info ">
                                    <div class="title-product">Smart watches</div>
                                    <span class="badge  rounded-pill text-danger bg-danger-subtle">-15%</span>
                                </div>
                            </div>
                            <div class="sale-item text-center">
                                <div class="box-img d-flex justify-content-center">
                                    <a href=""><img src="{{ asset('image/image35.png') }}" alt=""></a>
                                </div>
                                <div class="box-info ">
                                    <div class="title-product">Smart watches</div>
                                    <span class="badge  rounded-pill text-danger bg-danger-subtle">-15%</span>
                                </div>
                            </div>
                            <div class="sale-item text-center">
                                <div class="box-img d-flex justify-content-center">
                                    <a href=""><img src="{{ asset('image/image35.png') }}" alt=""></a>
                                </div>
                                <div class="box-info ">
                                    <div class="title-product">Smart watches</div>
                                    <span class="badge  rounded-pill text-danger bg-danger-subtle">-15%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <!-- Block-items-group -->
            <div class="block-group card">
                <div class="d-grid group">
                    <div class="group-item-left">
                        <img src="{{ asset('image/image92.png') }}" alt="hình ảnh">
                        <div class="title">
                            <h2>Home and outdoor</h2>
                            <button class="btn bg-white  ">Source now</button>
                        </div>
                    </div>
                    <div class="autoplay-block">
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="https://didongviet.vn/dchannel/wp-content/uploads/2023/08/hinh-nen-3d-hinh-nen-iphone-dep-3d-didongviet@2x-576x1024.jpg"
                                     alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                        <div class="group-item p-2">
                            <div class="content-item">
                                <h6>Soft chairs</h6>
                                <small>From USD 19 </small>
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('image/rasm.png') }}" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <!-- Section-inquiry -->
            <div class="card section-inquiry">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="info-inquiry text-white">
                            <h2 class="inquiry-title">An easy way to send requests to all suppliers </h2>
                            <p class="inquiry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card p-3">
                            <h5 class="card-title  mb-3">Send quote to suppliers</h5>
                            <form action="">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input class="form-control" type="text" name=""
                                               placeholder="What item you need?">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="" class="form-control" id="" cols="" rows="2"
                                                  placeholder="Type more details"></textarea>
                                    </div>
                                    <div class="col-6 col-md-6 mb-3">
                                        <input type="text" name="" class="form-control" placeholder="quantity">
                                    </div>
                                    <div class="col-6 col-md-3 mb-3">
                                        <select class="form-control form-select" aria-label="Default select example">
                                            <option selected>Pcs</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary form-control">Send inquiry</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Section recommended -->
            <div class="section-recommend">
                <h4 class="mb-3">Recommended Items</h4>
                <div class="list-product d-flex flex-wrap justify-content-between">
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img1.png') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors, for men. T-shirts with multiple
                                colors, for men</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img2.jpg') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="https://didongviet.vn/dchannel/wp-content/uploads/2023/08/hinh-nen-3d-hinh-nen-iphone-dep-3d-didongviet@2x-576x1024.jpg
                                " alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors, for men. T-shirts with multiple
                                colors, for men</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img2.jpg') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img1.png') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors, for men. T-shirts with multiple
                                colors, for men</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img2.jpg') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img1.png') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors, for men. T-shirts with multiple
                                colors, for men</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img2.jpg') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img1.png') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors, for men. T-shirts with multiple
                                colors, for men</div>
                        </div>
                    </div>
                    <div class="product-item border rounded-2">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/img2.jpg') }}" alt="img_product">
                            </a>
                        </div>
                        <div class="info-product">
                            <ins class="price text-decoration-none">$10.30</ins>
                            <div class="title-product">T-shirts with multiple colors</div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Section-service -->
            <div class="section-service">
                <h4 class="mb-4">Our extra services</h4>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{ asset('image/Maskgroup2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body p-3">
                                <h6 class="card-title">Source from <br> Industry Hubs</h6>
                            </div>
                            <div class="icon text-center">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{ asset('image/Maskgroup2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body p-3">
                                <h6 class="card-title">Source from <br> Industry Hubs</h6>
                            </div>
                            <div class="icon text-center">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{ asset('image/Maskgroup2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body p-3">
                                <h6 class="card-title">Source from <br> Industry Hubs</h6>
                            </div>
                            <div class="icon text-center">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{ asset('image/Maskgroup2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body p-3">
                                <h6 class="card-title">Source from <br> Industry Hubs</h6>
                            </div>
                            <div class="icon text-center">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Section country -->
            <div class="section-country">
                <h4 class="mb-4">Suppliers by region</h4>
                <div class="autoplay-country">
                    <div class="country-item  ">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item  ">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                    <div class="country-item">
                        <div class="box-img">
                            <a href="">
                                <img src="{{ asset('image/AE@2x.png') }}" alt="img_country">
                            </a>
                        </div>
                        <div class="info-country">
                            <h6 class="mb-0">Arabic Emirates</h6>
                            <div class="text-country">shopname.ae</div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="container">
            <div class="cta cta-separator cta-border-image cta-half mb-0" style="background-image: url({{ asset('Home/assets/images/demos/demo-3/bg-2.jpg') }});">
                <div class="cta-border-wrapper bg-white">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cta-wrapper cta-text text-center">
                                <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                                <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p><!-- End .cta-desc -->

                                <div class="social-icons social-icons-colored justify-content-center">
                                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="cta-wrapper text-center">
                                <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                                <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for first shopping</p><!-- End .cta-desc -->

                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-rounded" type="submit"><i class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .bg-white -->
            </div><!-- End .cta -->
        </div>

    </div>
@endsection
