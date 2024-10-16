@extends('components.client.main')
@section('title')
    Cart | {{ config('app.name') }}
@endsection
@section('pages')
    Cart
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
                                <span>Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- cart area -->
        <section class="cart-area pb-80">
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
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $total = 0;
                                    @endphp

                                    @foreach($carts as $cart)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="{{ route('shop.detail', ['slug' => $cart->product->slug]) }}">
                                                    <img src="{{ asset('store/product/image/' . $cart->product->images->firstOrFail()->image_path) }}" alt="">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="{{ route('shop.detail', ['slug' => $cart->product->slug]) }}">{{ $cart->product->name }}</a>
                                            </td>
                                            <td class="product-price">
                                                @if($cart->product->discount)
                                                    @php
                                                        if($cart->product->discount->percentage) {
                                                            $discountedPrice = $cart->product->price - ($cart->product->price * $cart->product->discount->percentage / 100);
                                                        } elseif($cart->product->discount->amount) {
                                                            $discountedPrice = $cart->product->price - $cart->product->discount->amount;
                                                        } else {
                                                            $discountedPrice = $cart->product->price;
                                                        }
                                                    @endphp
                                                    <span class="amount">Rp. {{ number_format($discountedPrice, 0, ',', '.') }}</span>
                                                    <del>Rp. {{ number_format($cart->product->price, 0, ',', '.') }}</del>
                                                @else
                                                    <span class="amount">Rp. {{ number_format($cart->product->price, 0, ',', '.') }}</span>
                                                @endif
                                            </td>
                                            <td class="product-quantity">
                                                <input class="cart-input" type="number" value="{{ $cart->quantity }}"
                                                       data-price="{{ $discountedPrice }}" oninput="updateSubtotal(this)">
                                            </td>
                                            <td class="product-subtotal">
                                                @php
                                                    $subtotal = $discountedPrice * $cart->quantity;
                                                    $total += $subtotal;
                                                @endphp
                                                <span class="amount">Rp. {{ number_format($subtotal, 0, ',', '.') }}</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="{{ route('cart.destroy', ['userId' => $user->id, 'productId' => $cart->product->id]) }}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="coupon-all">--}}
{{--                                        <div class="coupon">--}}
{{--                                            <input id="coupon_code" class="input-text" name="coupon_code" value=""--}}
{{--                                                   placeholder="Coupon code" type="text">--}}
{{--                                            <button class="tp-btn tp-color-btn banner-animation" name="apply_coupon" type="submit">Apply--}}
{{--                                                Coupon</button>--}}
{{--                                        </div>--}}
{{--                                        <div class="coupon2">--}}
{{--                                            <button class="tp-btn tp-color-btn banner-animation" name="update_cart" type="submit">Update cart</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row justify-content-end">
                                <div class="col-md-5">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul class="mb-20">
                                            <li>Subtotal <span>Rp. {{ number_format($total, 0, ',', '.') }}</span></li>
                                            <li>Total <span>Rp. {{ number_format($total, 0, ',', '.') }}</span></li>
                                        </ul>
                                        <a href="checkout.html" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart area end-->


        <!-- feature-area-start -->
        <section class="feature-area mainfeature__bg pt-50 pb-40" data-background="assets/img/shape/footer-shape-1.svg">
            <div class="container">
                <div class="mainfeature__border pb-15">
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="assets/img/icon/feature-icon-1.svg" alt="">
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
                                    <img src="assets/img/icon/feature-icon-2.svg" alt="">
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
                                    <img src="assets/img/icon/feature-icon-3.svg" alt="">
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
                                    <img src="assets/img/icon/feature-icon-4.svg" alt="">
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
                                    <img src="assets/img/icon/feature-icon-5.svg" alt="">
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
    <script>
        function updateSubtotal(input) {
            let quantity = parseInt(input.value);
            let price = parseFloat(input.getAttribute('data-price'));

            if (isNaN(quantity) || quantity <= 0) {
                quantity = 1;
                input.value = 1;
            }

            let subtotal = quantity * price;
            let subtotalElement = input.closest('tr').querySelector('.product-subtotal .amount');
            subtotalElement.innerHTML = `Rp. ${subtotal.toLocaleString('id-ID', { minimumFractionDigits: 0 })}`;

            updateTotal();
        }

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.product-subtotal .amount').forEach(function(subtotalElement) {
                let subtotalText = subtotalElement.innerHTML.replace('Rp. ', '').replace('.', '').replace(',', '.');
                total += parseFloat(subtotalText);
            });

            document.querySelector('.cart-page-total ul li:last-child span').innerHTML = `Rp. ${total.toLocaleString('id-ID', { minimumFractionDigits: 0 })}`;
        }

        function updateQuantity(element, increment) {
            let input = element.closest('td').querySelector('.cart-input');
            let quantity = parseInt(input.value) + increment;

            if (quantity > 0) {
                input.value = quantity;
                updateSubtotal(input);
            }
        }
    </script>
@endsection
