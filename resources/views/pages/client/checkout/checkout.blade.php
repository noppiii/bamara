@extends('components.client.main')
@section('title')
    Checkout | {{ config('app.name') }}
@endsection
@section('pages')
    Checkout
@endsection
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list">
                                <span class="tp-breadcrumb__active"><a href="{{route('home')}}">Home</a></span>
                                <span class="dvdr">/</span>
                                <span>Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->


        <!-- checkout-area start -->
        <section class="checkout-area pb-50">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="your-order mb-30 ">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$165.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$50.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">$215.00</span></td>
                                        </tr>
                                        {{--                                        <tr class="shipping">--}}
                                        {{--                                            <th>Shipping</th>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                <ul>--}}
                                        {{--                                                    <li>--}}
                                        {{--                                                        <input type="radio" name="shipping">--}}
                                        {{--                                                        <label>--}}
                                        {{--                                                            Flat Rate: <span class="amount">$7.00</span>--}}
                                        {{--                                                        </label>--}}
                                        {{--                                                    </li>--}}
                                        {{--                                                    <li>--}}
                                        {{--                                                        <input type="radio" name="shipping">--}}
                                        {{--                                                        <label>Free Shipping:</label>--}}
                                        {{--                                                    </li>--}}
                                        {{--                                                </ul>--}}
                                        {{--                                            </td>--}}
                                        {{--                                        </tr>--}}
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">$215.00</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="accordion" id="checkoutAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="checkoutOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#bankOne" aria-expanded="true"
                                                        aria-controls="bankOne">
                                                    Payment
                                                </button>
                                            </h2>
                                            <div id="bankOne" class="accordion-collapse collapse show"
                                                 aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                    We support several payment methods using e-wallets
                                                </div>
                                                <div class="accordion-body tpfooter__payment">
                                                    <label for="payment-method" class="form-label">Choose your e-wallet
                                                        method:</label>
                                                    <div class="row">
                                                        <div class="col-6 col-md-4 mb-3 payment-option">
                                                            <input type="radio" id="bank_transfer" name="payment_method"
                                                                   value="bank_transfer" class="btn-check"/>
                                                            <label for="bank_transfer"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/product/products26-min.jpg') }}"
                                                                    alt="Bank Transfer" class="mb-2"
                                                                    style="width: 50px;">
                                                                Bank Transfer
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4 mb-3 payment-option">
                                                            <input type="radio" id="credit_card" name="payment_method"
                                                                   value="credit_card" class="btn-check"/>
                                                            <label for="credit_card"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/product/products26-min.jpg') }}"
                                                                    alt="Credit Card" class="mb-2" style="width: 50px;">
                                                                Credit Card
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4 mb-3 payment-option">
                                                            <input type="radio" id="paypal" name="payment_method"
                                                                   value="paypal" class="btn-check"/>
                                                            <label for="paypal"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/product/products26-min.jpg') }}"
                                                                    alt="PayPal" class="mb-2" style="width: 50px;">
                                                                PayPal
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4 mb-3 payment-option">
                                                            <input type="radio" id="gopay" name="payment_method"
                                                                   value="gopay" class="btn-check"/>
                                                            <label for="gopay"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/product/products26-min.jpg') }}"
                                                                    alt="GoPay" class="mb-2" style="width: 50px;">
                                                                GoPay
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4 mb-3 payment-option">
                                                            <input type="radio" id="shopeepay" name="payment_method"
                                                                   value="shopeepay" class="btn-check"/>
                                                            <label for="shopeepay"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/product/products26-min.jpg') }}"
                                                                    alt="ShopeePay" class="mb-2" style="width: 50px;">
                                                                ShopeePay
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="order-button-payment mt-20">
                                        <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place
                                            order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- checkout-area end -->


        <!-- feature-area-start -->
        <section class="feature-area mainfeature__bg pt-50 pb-40"
                 data-background="{{asset('client/assets/img/shape/footer-shape-1.svg')}}">
            <div class="container">
                <div class="mainfeature__border pb-15">
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('client/assets/img/icon/feature-icon-1.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Fast Delivery</h4>
                                    <p>Across West & East India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('client/assets/img/icon/feature-icon-2.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">safe payment</h4>
                                    <p>100% Secure Payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('client/assets/img/icon/feature-icon-3.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Online Discount</h4>
                                    <p>Add Multi-buy Discount </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('client/assets/img/icon/feature-icon-4.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Help Center</h4>
                                    <p>Dedicated 24/7 Support </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('client/assets/img/icon/feature-icon-5.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Curated items</h4>
                                    <p>From Handpicked Sellers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area-end -->

    </main>
@endsection
