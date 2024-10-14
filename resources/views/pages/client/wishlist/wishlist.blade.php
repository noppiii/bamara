@extends('components.client.main')
@section('title')
    Wishlits | {{ config('app.name') }}
@endsection
@section('pages')
    Wishlits
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
                                <span>Wishlist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- wishlist-area-start -->
        <div class="cart-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Courses</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-add-to-cart">Add To Cart</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="shop-details.html">
                                                <img src="{{asset('client/assets/img/product/products22-min.jpg')}}" alt="">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-details.html">Summer Breakfast For Healthy Morning</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">$130.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <span class="cart-minus">-</span>
                                            <input class="cart-input" type="text" value="1">
                                            <span class="cart-plus">+</span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">$130.00</span>
                                        </td>
                                        <td class="product-add-to-cart">
                                            <button class="tp-btn tp-color-btn  tp-wish-cart banner-animation">Add To Cart</button>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="shop-details.html">
                                                <img src="{{asset('client/assets/img/product/products26-min.jpg')}}"  alt="">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-details.html">The Best Great Benefits Of Fresh Beef</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">$120.50</span>
                                        </td>
                                        <td class="product-quantity">
                                            <span class="cart-minus">-</span>
                                            <input class="cart-input" type="text" value="1">
                                            <span class="cart-plus">+</span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">$120.50</span>
                                        </td>
                                        <td class="product-add-to-cart">
                                            <button class="tp-btn tp-color-btn tp-wish-cart banner-animation">Add To Cart</button>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- wishlist-area-end-->


        <!-- feature-area-start -->
        <section class="feature-area mainfeature__bg pt-50 pb-40" data-background="{{asset('client/assets/img/shape/footer-shape-1.svg')}}">
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
