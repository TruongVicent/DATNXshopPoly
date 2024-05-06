@extends('index')
@section('main')
{{--    banner--}}
    @include('includes.banner')
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

        <div class="section-subscribe d-flex align-items-center flex-wrap flex-column">
            <div class="subscribe-text mb-3 text-center">
                <h5 class="mb-0 fs-xs-1">Subscribe on our newsletter</h5>
                <span>Get daily news on upcoming offers from many suppliers all over the world</span>
            </div>
            <div class="subscribe-form">
                <form action="">
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" name="">
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
{{--update--}}
