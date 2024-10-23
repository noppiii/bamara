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
                <form action="{{ route('checkout.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                                            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                                            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" name="address" placeholder="Street address" value="{{ old('address') }}">
                                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input type="text" name="detail_address" placeholder="Apartment, suite, unit etc. (optional)" value="{{ old('detail_address') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
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
                                        @php $orderTotal = 0; @endphp
                                        @foreach($productOrder as $item)
                                            @php
                                                $originalPrice = $item->product->price;
                                                $discountedPrice = $originalPrice;

                                                if ($item->product->discount) {
                                                    if ($item->product->discount->percentage) {
                                                        $discountedPrice = $originalPrice - ($originalPrice * $item->product->discount->percentage / 100);
                                                    } elseif ($item->product->discount->amount) {
                                                        $discountedPrice = $originalPrice - $item->product->discount->amount;
                                                    }
                                                }

                                                $subtotal = $discountedPrice * $item->quantity;
                                                $orderTotal += $subtotal;
                                            @endphp

                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $item->product->name }} <strong class="product-quantity"> × {{ $item->quantity }}</strong>
                                                </td>
                                                <td class="product-total">
                                                    @if($discountedPrice < $originalPrice)
                                                        <span class="amount">Rp. {{ number_format($discountedPrice * $item->quantity, 0, ',', '.') }}</span>
                                                        <del>Rp. {{ number_format($originalPrice * $item->quantity, 0, ',', '.') }}</del>
                                                    @else
                                                        <span class="amount">Rp. {{ number_format($originalPrice * $item->quantity, 0, ',', '.') }}</span>
                                                    @endif
                                                </td>
                                            </tr>

                                            <input type="hidden" name="products[{{ $loop->index }}][product_id]" value="{{ $item->product->id }}">
                                            <input type="hidden" name="products[{{ $loop->index }}][quantity]" value="{{ $item->quantity }}">
                                        @endforeach

                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount">Rp. {{ number_format($orderTotal, 0, ',', '.') }}</span></strong></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span
                                                        class="amount">Rp. {{ number_format($orderTotal, 0, ',', '.') }}</span></strong>
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
                                                                   value="dana" class="btn-check"/>
                                                            <label for="bank_transfer"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/logo/dana.png') }}"
                                                                    alt="Dana" class="mb-2"
                                                                    style="width: 72px;">
                                                                Dana
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4 mb-3 payment-option">
                                                            <input type="radio" id="credit_card" name="payment_method"
                                                                   value="gopay" class="btn-check"/>
                                                            <label for="credit_card"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/logo/gopay.png') }}"
                                                                    alt="Gopay" class="mb-2" style="width: 50px;">
                                                                GoPay
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4 mb-3 payment-option">
                                                            <input type="radio" id="paypal" name="payment_method"
                                                                   value="shopeepay" class="btn-check"/>
                                                            <label for="paypal"
                                                                   class="btn btn-outline-primary d-flex flex-column align-items-center">
                                                                <img
                                                                    src="{{ asset('client/assets/img/logo/shopeepay.png') }}"
                                                                    alt="shopeepay" class="mb-2" style="width: 50px;">
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
