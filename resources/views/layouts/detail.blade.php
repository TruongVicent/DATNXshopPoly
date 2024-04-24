@extends('index')
@section('main')
    <div class="main">
        <div class="container">
            <nav style=""
                 aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href=""
                                                                              class="text-decoration-none">Library</a></li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row border rounded-2 py-3 bg-white">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="box-left">
                        <div class="box-img border rounded-2">
                            <img src="{{ asset('image/image 34.png') }}" alt="" id="change_image">
                        </div>
                        <div class="img-detail">
                            <!-- <div class="img-item">
                                <img src="../public/image/product_2.jpg" alt="">
                            </div>
                            <div class="img-item">
                                <img src="../public/image/product_2.jpg" alt="">
                            </div>
                            <div class="img-item">
                                <img src="../public/image/product_2.jpg" alt="">
                            </div> -->
                            <div class="img-item">
                                <img src="https://didongviet.vn/dchannel/wp-content/uploads/2023/08/hinh-nen-3d-hinh-nen-iphone-dep-3d-didongviet@2x-576x1024.jpg
                                " alt="img-detail" onclick="changeImg(this.src)">
                            </div>
                            <div class="img-item">
                                <img src="../public/image/product_2.jpg" alt="img-detail" onclick="changeImg(this.src)">
                            </div>
                            <div class="img-item">
                                <img src="../public/image/image 34.png" alt="img-detail" onclick="changeImg(this.src)">
                            </div>
                            <div class="img-item">
                                <img src="../public/image/product_2.jpg" alt="img-detail" onclick="changeImg(this.src)">
                            </div>
                            <div class="img-item">
                                <img src="../public/image/product_2.jpg" alt="img-detail" onclick="changeImg(this.src)">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="box-center">
                        <div class="text-success"><i class="bi bi-check2 me-2"></i>Còn hàng</div>
                        <h5>Mens Long Sleeve T-shirt Cotton Base Layer Slim Muscle</h5>
                        <div class="rating d-flex">
                            <div class="star text-warning pe-3 me-3 border-end">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-2">66</span>
                            </div>
                            <div class="text-body-tertiary pe-3 me-3 border-end">
                                <i class="bi bi-chat-left-dots"></i> <span class="ms-2">32 reviews</span>
                            </div>
                            <div class="text-body-tertiary ">
                                <i class="bi bi-bag-check"></i> <span class="ms-2">1.8k đã bán</span>
                            </div>
                        </div>
                        <div class="trade-price d-flex bg-warning-subtle p-3 mt-3">
                            <div class="border-end pe-5 me-3">
                                <div class="price fw-bold text-danger">990.000đ</div>
                                <small class="text-body-tertiary">50-100pcs</small>
                            </div>
                            <div class="border-end pe-5 me-3">
                                <div class="price fw-bold">990.000đ</div>
                                <small class="text-body-tertiary">50-100pcs</small>
                            </div>
                            <div class="">
                                <div class="price fw-bold">990.000đ</div>
                                <small class="text-body-tertiary">50-100pcs</small>
                            </div>
                        </div>
                        <div class="short-info mt-3">
                            <div class="border-bottom d-flex pb-3">
                                <div class="short-title text-body-tertiary">Price:</div>
                                <div class="short-content text-secondary">Negotiable</div>
                            </div>
                            <div class="border-bottom py-3">
                                <div class="d-flex mb-3">
                                    <div class="short-title text-body-tertiary">Type:</div>
                                    <div class="short-content text-secondary">Negotiable</div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="short-title text-body-tertiary">Material:</div>
                                    <div class="short-content text-secondary">Plastic material</div>
                                </div>
                                <div class="d-flex">
                                    <div class="short-title text-body-tertiary">Design:</div>
                                    <div class="short-content text-secondary">Modern nice</div>
                                </div>
                            </div>
                            <div class=" py-3">
                                <div class="d-flex mb-3">
                                    <div class="short-title text-body-tertiary">Customization: </div>
                                    <div class="short-content text-secondary">Customized logo and design custom
                                        packageslogo and design custom packages</div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="short-title text-body-tertiary">Protection: </div>
                                    <div class="short-content text-secondary">Refund Policy</div>
                                </div>
                                <div class="d-flex">
                                    <div class="short-title text-body-tertiary">Warranty:</div>
                                    <div class="short-content text-secondary">2 years full warranty </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="box-right border rounded-2 p-3">
                        <div class="d-flex">
                            <div class="avatar-img">
                                <img src="https://didongviet.vn/dchannel/wp-content/uploads/2023/08/hinh-nen-3d-hinh-nen-iphone-dep-3d-didongviet@2x-576x1024.jpg"
                                     alt="">
                            </div>
                            <div class="ms-2">
                                Supplier <br> Guanjoi Trading LLC
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex mb-2">
                            <div class="flags">
                                <img src="../public/image/VN.png" alt="flags-img">
                            </div>
                            <div class="text-body-tertiary ms-2">Germany, Berlin</div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="icon text-body-tertiary">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="text-body-tertiary ms-2">Verified Seller</div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="icon text-body-tertiary">
                                <i class="bi bi-globe"></i>
                            </div>
                            <div class="text-body-tertiary ms-2">Worldwide shipping</div>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button class="btn btn-primary" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>

                    <div class="text-center text-primary fw-medium mt-5">
                        <i class="bi bi-suit-heart "></i><span class="ms-2">Save for later</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="block-detail">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="bg-white border rounded-2 px-3">
                            <ul class="nav  nav-underline border-bottom" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#description-tab-pane" type="button" role="tab"
                                            aria-controls="description-tab-pane" aria-selected="true">Description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#reviews-tab-pane" type="button" role="tab"
                                            aria-controls="reviews-tab-pane" aria-selected="false">Reviews</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#shipping-tab-pane" type="button" role="tab"
                                            aria-controls="shipping-tab-pane" aria-selected="false">Shipping</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#about-tab-pane" type="button" role="tab"
                                            aria-controls="about-tab-pane" aria-selected="false">About seller</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
                                     aria-labelledby="home-tab" tabindex="0">
                                    <div class="py-3">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute
                                            irure
                                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                        <p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat
                                            nulla
                                            pariatur.</p>

                                        <div class="table-responsive w-50 my-4">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Model</td>
                                                    <td>#8786867</td>
                                                </tr>
                                                <tr>
                                                    <td>Model</td>
                                                    <td>#8786867</td>
                                                </tr>
                                                <tr>
                                                    <td>Certificate</td>
                                                    <td>ISO-898921212</td>
                                                </tr>
                                                <tr>
                                                    <td>Size</td>
                                                    <td>34mm x 450mm x 19mm</td>
                                                </tr>
                                                <tr>
                                                    <td>Model</td>
                                                    <td>#8786867</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="mb-3">
                                            <i class="bi bi-check2 me-2"></i>Some great feature name here
                                        </div>
                                        <div class="mb-3">
                                            <i class="bi bi-check2 me-2"></i>Some great feature name here
                                        </div>
                                        <div class="mb-3">
                                            <i class="bi bi-check2 me-2"></i>Some great feature name here
                                        </div>
                                        <div class="mb-3">
                                            <i class="bi bi-check2 me-2"></i>Some great feature name here
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel"
                                     aria-labelledby="profile-tab" tabindex="0">
                                    <div class="py-3">
                                        tab review
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="shipping-tab-pane" role="tabpanel"
                                     aria-labelledby="contact-tab" tabindex="0">
                                    <div class="py-3">
                                        tab shipping
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-tab-pane" role="tabpanel"
                                     aria-labelledby="about-tab" tabindex="0">
                                    <div class="py-3">
                                        tab about
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="bg-white rounded-2 border p-3">
                            <div class="fw-bold mb-3">You may like</div>
                            <div class="mb-3 ">
                                <div class="box-img">
                                    <img src="https://didongviet.vn/dchannel/wp-content/uploads/2023/08/hinh-nen-3d-hinh-nen-iphone-dep-3d-didongviet@2x-576x1024.jpg"
                                         width="100px" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

@endsection
