@extends('index')
@section('main')
    <div class="main">
        <div class="section-cart pt-4">
            <div class="container">
                <h4 class="mb-4">My Cart</h4>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-9">
                        <div class="card px-3">
                            <div class="cart-item py-3">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-8 col-lg-9">
                                        <div class="d-flex">
                                            <div class="box-img me-3">
                                                <img src="{{ asset('image/img2.jpg') }}" alt="" class="rounded-1">
                                            </div>
                                            <div class="box-content">
                                                <div class="title">T-shirts with multiple colors, for men and lady</div>
                                                <div class="text mb-2">
                                                    Size: medium, Color: blue, Material: Plastic <br> Seller: Artel
                                                    Market
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 col-lg-2">
                                        <div class="price">5500000đ</div>
                                        <div class="quantity">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" id="decrease-btn"
                                                            type="button">-</button>
                                                </div>
                                                <input type="number" class="form-control text-center" id="quantity"
                                                       value="1" min="1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" id="increase-btn"
                                                            type="button">+</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-6 col-md-1 col-lg-1 d-flex justify-content-center">
                                        <div class="delete">
                                            <a href="#"><i class="bi bi-x-lg fs-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between py-3">
                                <button class="btn btn-primary"><i class="bi bi-arrow-left me-2"></i>Back to
                                    shop</button>
                                <button class="btn btn-outline-primary">Remove All</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card mb-3 p-3">
                            <h6>Have a coupon?</h6>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" placeholder="Add coupon"
                                       aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Button</button>
                            </div>
                        </div>
                        <div class="card p-3">
                            <table class="table table-borderless mb-0">
                                <tr>
                                    <td>Subtotal:</td>
                                    <td class="price text-end">100000000000đ</td>
                                </tr>
                                <tr>
                                    <td>Discount:</td>
                                    <td class="price text-end">100000000000đ</td>
                                </tr>
                                <tr>
                                    <td>Tax:</td>
                                    <td class="price text-end">100000000000đ</td>
                                </tr>
                            </table>
                            <hr>
                            <div class="total d-flex justify-content-between">
                                <div class="p-2">Total</div>
                                <div class="price text-end p-2">100000000000đ</div>
                            </div>
                            <button type="button" class="btn btn-primary">Checkout</button>
                            <div class="payment d-flex justify-content-center">
                                <img class="mt-3 mx-2" src="{{ asset('image/payment/payment-1.png') }}" alt="">
                                <img class="mt-3 mx-2" src="{{ asset('image/payment/payment-2.png') }}" alt="">
                                <img class="mt-3 mx-2" src="{{ asset('image/payment/payment-3.png') }}" alt="">
                                <img class="mt-3 mx-2" src="{{ asset('image/payment/payment-4.png') }}" alt="">
                                <img class="mt-3 mx-2" src="{{ asset('image/payment/payment-5.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service">
                    <div class="row justify-content-center my-4">
                        <div class="col-12 col-md-6 col-lg-3 j">
                            <div class="d-flex py-3">
                                <div class="service-icon me-3">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                                <div class="service-content">
                                    <div class="title">Secure payment</div>
                                    <div class="text">Have you ever finally just </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="d-flex py-3">
                                <div class="service-icon me-3">
                                    <i class="fa-solid fa-message"></i>
                                </div>
                                <div class="service-content">
                                    <div class="title">Secure payment</div>
                                    <div class="text">Have you ever finally just </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="d-flex py-3">
                                <div class="service-icon me-3">
                                    <i class="fa-solid fa-truck"></i>
                                </div>
                                <div class="service-content">
                                    <div class="title">Secure payment</div>
                                    <div class="text">Have you ever finally just </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-product mt-4">
                    <h5 class="mb-4">Saved for later</h5>
                    <div class="row">
                        <!-- Products will go here -->
                    </div>
                </div>
                <div class="banner d-flex justify-content-between align-items-center">
                    <div class="text">

                        <h4 class="text-white">Super discount on more than 100 USD</h4>
                        <div class="text-white">Have you ever finally just write dummy info</div>
                    </div>
                    <div class="button">
                        <button class="btn btn-warning">Shop now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Lấy phần tử đầu vào và các nút
        var input = document.getElementById('quantity');
        var decreaseBtn = document.getElementById('decrease-btn');
        var increaseBtn = document.getElementById('increase-btn');

        // Thêm trình xử lý sự kiện vào nút giảm
        decreaseBtn.addEventListener('click', function () {
            // Lấy giá trị hiện tại của đầu vào
            var value = parseInt(input.value);
            // Đảm bảo giá trị ít nhất là 1
            if (value > 1) {
                // Giảm giá trị đi 1
                input.value = value - 1;
            }
        });

        // Thêm trình xử lý sự kiện vào nút tăng
        increaseBtn.addEventListener('click', function () {
            // Lấy giá trị hiện tại của đầu vào
            var value = parseInt(input.value);
            // Tăng giá trị lên 1
            input.value = value + 1;
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Select all elements with class "price"
            var prices = document.querySelectorAll('.price');

            // Loop through each price element
            prices.forEach(function (priceElement) {
                // Parse the price as a float number
                var price = parseFloat(priceElement.textContent);

                // Format the price with Vietnamese dong symbol and thousand separator
                var formattedPrice = price.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });

                // Update the content of the price element with the formatted price
                priceElement.textContent = formattedPrice;
            });
        });

    </script>

@endsection
{{--update--}}
