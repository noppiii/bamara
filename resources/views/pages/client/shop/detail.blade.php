@extends('components.client.main')
@section('title')
{{$detailProduct->name}} | {{ config('app.name') }}
@endsection
@section('pages')
{{$detailProduct->name}}
@endsection
@section('content')
    <style>
        .tpreview__star-icon label i {
            cursor: pointer;
            font-size: 24px;
            color: #cccccc;
        }

        .tpreview__star-icon label i.icon-star {
            color: #f39c12;
        }

        .tpreview__star-icon label:hover i {
            color: #f39c12;
        }
    </style>
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area grey-bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list">
                                <span class="tp-breadcrumb__active"><a href="{{route('home')}}">Home</a></span>
                                <span class="dvdr">/</span>
                                <span class="tp-breadcrumb__active"><a href="index.html{{route('shop')}}">Shop</a></span>
                                <span class="dvdr">/</span>
                                <span>{{$detailProduct->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- shop-details-area-start -->
        <section class="shopdetails-area grey-bg pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12">
                        <div class="tpdetails__area mr-60 pb-30">
                            <div class="tpdetails__product mb-30">
                                <div class="tpdetails__title-box">
                                    <h3 class="tpdetails__title">{{$detailProduct->name}}</h3>
                                    @php
                                        $totalReviews = $detailProduct->reviews->count();
                                        $averageRating = $totalReviews > 0 ? $detailProduct->reviews->avg('rating') : 0;
                                    @endphp

                                    <ul class="tpdetails__brand">
                                        <li>
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $averageRating)
                                                    <i class="icon-star"></i>
                                                @else
                                                    <i class="icon-star_outline1"></i>
                                                @endif
                                            @endfor
                                            <b>{{ $totalReviews }} Reviews</b>
                                        </li>
                                    </ul>

                                </div>
                                <div class="tpdetails__box">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="tpproduct-details__nab">
                                                @foreach($detailProduct->images as $image)
                                                    <div class="tpproduct-details__thumb-img mb-10">
                                                        <img src="{{ asset('store/product/image/' . $image->image_path) }}" alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="product__details product__sticky">
                                                <div class="product__details-price-box">
                                                    @if($detailProduct->discount)
                                                        @php
                                                            if($detailProduct->discount->percentage) {
                                                                $discountedPrice = $detailProduct->price - ($detailProduct->price * $detailProduct->discount->percentage / 100);
                                                            } elseif($detailProduct->discount->amount) {
                                                                $discountedPrice = $detailProduct->price - $detailProduct->discount->amount;
                                                            } else {
                                                                $discountedPrice = $detailProduct->price;
                                                            }
                                                        @endphp
                                                        <h5 class="product__details-price">Rp. {{ number_format($discountedPrice, 0, ',', '.') }}</h5>
                                                        <del>Rp. {{ number_format($detailProduct->price, 0, ',', '.') }}</del>
                                                    @else
                                                        <h5 class="product__details-price">Rp. {{ number_format($detailProduct->price, 0, ',', '.') }}</h5>
                                                    @endif
                                                </div>
                                                <div class="product__details-cart">
                                                    <div class="product__details-quantity d-flex align-items-center mb-15">
                                                        <b>Qty:</b>
                                                        <div class="product__details-count mr-10">
                                                            <span class="cart-minus"><i class="far fa-minus"></i></span>
                                                            <input class="tp-cart-input" type="text" value="1">
                                                            <span class="cart-plus"><i class="far fa-plus"></i></span>
                                                        </div>
                                                        <div class="product__details-btn">
                                                            <a href="cart.html">add to cart</a>
                                                        </div>
                                                    </div>
                                                    <ul class="product__details-check">
                                                        <li>
                                                            <a href="#"><i class="icon-heart icons"></i> add to wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-share-2"></i> Share</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product__details-stock mb-25">
                                                    <ul>
                                                        <li>Availability: <i>{{$detailProduct->stock}} Instock</i></li>
                                                        <li>Tag:
                                                            @foreach($detailProduct->tags as $tag)
                                                                <a href="#">{{ $tag->name }}</a>
                                                                @if(!$loop->last)
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                        <li>Category:
                                                            @foreach($detailProduct->categories as $category)
                                                                <a href="#">{{ $category->name }}</a>
                                                                @if(!$loop->last)
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                    </ul>
                                                </div>
{{--                                                <div class="product__details-payment text-center">--}}
{{--                                                    <img src="assets/img/shape/payment-2.png" alt="">--}}
{{--                                                    <span>Guarantee safe & Secure checkout</span>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tpdescription__box">
                                <div class="tpdescription__box-center d-flex align-items-center justify-content-center">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Short Description Product</button>
                                            <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">Description Product</button>
                                            <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (1)</button>
                                        </div>
                                    </nav>
                                </div>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                                        <div class="tpdescription__content">
                                            <p>{!! $detailProduct->short_description !!}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                                        <div class="tpdescription__content">
                                            <p>{!! $detailProduct->description !!}</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                                        <div class="tpreview__wrapper">
                                            <h4 class="tpreview__wrapper-title">{{ $totalReviews }} review for {{$detailProduct->name}}</h4>
                                            @foreach($detailProduct->reviews as $review)
                                                <div class="tpreview__comment">
                                                    <div class="tpreview__comment-img mr-20">
                                                        <img src="{{ asset('client/assets/img/testimonial/test-avata-1.png') }}" alt="User Avatar"> <!-- Sesuaikan dengan avatar user jika ada -->
                                                    </div>
                                                    <div class="tpreview__comment-text">
                                                        <div class="tpreview__comment-autor-info d-flex align-items-center justify-content-between">
                                                            <div class="tpreview__comment-author">
                                                                <span>{{ $review->user->name }}</span>
                                                            </div>
                                                            <div class="tpreview__comment-star">
                                                                @for($i = 1; $i <= 5; $i++)
                                                                    @if($i <= $review->rating)
                                                                        <i class="icon-star"></i>
                                                                    @else
                                                                        <i class="icon-star_outline1"></i>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <span class="date mb-20">--{{ \Carbon\Carbon::parse($review->created_at)->format('F j, Y') }}</span> <!-- Tanggal review -->
                                                        <p>{{ $review->comment }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="tpreview__form">
                                                <h4 class="tpreview__form-title mb-25">Add a review </h4>
                                                <form action="{{ route('review.post', ['productId' => $detailProduct->id]) }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="tpreview__star mb-20">
                                                                <h4 class="title">Your Rating</h4>
                                                                <div class="tpreview__star-icon" id="star-rating">
                                                                    <input type="radio" name="rating" value="1" id="star1" required hidden>
                                                                    <label for="star1" data-value="1"><i class="icon-star_outline1"></i></label>

                                                                    <input type="radio" name="rating" value="2" id="star2" hidden>
                                                                    <label for="star2" data-value="2"><i class="icon-star_outline1"></i></label>

                                                                    <input type="radio" name="rating" value="3" id="star3" hidden>
                                                                    <label for="star3" data-value="3"><i class="icon-star_outline1"></i></label>

                                                                    <input type="radio" name="rating" value="4" id="star4" hidden>
                                                                    <label for="star4" data-value="4"><i class="icon-star_outline1"></i></label>

                                                                    <input type="radio" name="rating" value="5" id="star5" hidden>
                                                                    <label for="star5" data-value="5"><i class="icon-star_outline1"></i></label>
                                                                </div>
                                                            </div>
                                                            <div class="tpreview__input mb-30">
                                                                <textarea name="comment" placeholder="Message" required></textarea>
                                                                <div class="tpreview__submit mt-30">
                                                                    <button type="submit" class="tp-btn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="tpsidebar pb-30">
                            <div class="tpsidebar__warning mb-30">
                                <ul>
                                    <li>
                                        <div class="tpsidebar__warning-item">
                                            <div class="tpsidebar__warning-icon">
                                                <i class="icon-package"></i>
                                            </div>
                                            <div class="tpsidebar__warning-text">
                                                <p>Free shipping apply to all <br> orders over $90</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tpsidebar__warning-item">
                                            <div class="tpsidebar__warning-icon">
                                                <i class="icon-shield"></i>
                                            </div>
                                            <div class="tpsidebar__warning-text">
                                                <p>Guaranteed 100% Organic <br>  from nature farms</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tpsidebar__warning-item">
                                            <div class="tpsidebar__warning-icon">
                                                <i class="icon-package"></i>
                                            </div>
                                            <div class="tpsidebar__warning-text">
                                                <p>60 days returns if you change <br> your mind</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpsidebar__banner mb-30">
                                <img src="assets/img/shape/sidebar-product-1.png" alt="">
                            </div>
                            <div class="tpsidebar__product">
                                <h4 class="tpsidebar__title mb-15">Popular Products</h4>
                                @foreach($hotProducts as $hot)
                                    <div class="tpsidebar__product-item">
                                        <div class="tpsidebar__product-thumb p-relative">
                                            <img src="{{ asset('store/product/image/' . $hot->images->firstOrFail()->image_path) }}" alt="">
                                            <div class="tpsidebar__info bage">
                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                            </div>
                                        </div>
                                        <div class="tpsidebar__product-content">
                                            <h4 class="tpsidebar__product-title">
                                                <a href="shop-details-grid.html">{{$hot->name}}</a>
                                            </h4>
                                            @php
                                                $averageRating = $hot->reviews->avg('rating');
                                                $maxStars = 5;
                                            @endphp

                                            <div class="tpproduct__rating mb-5">
                                                @for($i = 1; $i <= $maxStars; $i++)
                                                    @if($i <= $averageRating)
                                                        <a href="#"><i class="icon-star"></i></a>
                                                    @else
                                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                                    @endif
                                                @endfor
                                            <div class="tpproduct__price">
                                                @if($hot->discount)
                                                    @php
                                                        if($hot->discount->percentage) {
                                                            $discountedPrice = $hot->price - ($hot->price * $hot->discount->percentage / 100);
                                                        } elseif($hot->discount->amount) {
                                                            $discountedPrice = $hot->price - $hot->discount->amount;
                                                        } else {
                                                            $discountedPrice = $hot->price;
                                                        }
                                                    @endphp
                                                    <span>Rp. {{ number_format($discountedPrice, 0, ',', '.') }}</span>
                                                    <del>Rp. {{ number_format($hot->price, 0, ',', '.') }}</del>
                                                @else
                                                    <span>Rp. {{ number_format($hot->price, 0, ',', '.') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details-area-end -->

        <!-- product-area-start -->
        <section class="product-area whight-product pt-75 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="tpdescription__product-title mb-20">Related Products</h5>
                    </div>
                </div>
                <div class="tpproduct__arrow double-product p-relative">
                    <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                        <div class="swiper-wrapper">
                            @foreach($relatedProducts as $related)
                                <div class="swiper-slide">
                                    <div class="tpproduct p-relative">
                                        <div class="tpproduct__thumb p-relative text-center">
                                            @php
                                                $productImages = $related->images->take(2);
                                            @endphp

                                            @if($productImages->count() >= 2)
                                                <a href="{{route('shop.detail', ['slug' => $related->slug])}}">
                                                    <img src="{{ asset('store/product/image/'. $productImages[0]->image_path) }}" width="250px;" alt="Product Image 1">
                                                </a>
                                                <a href="{{route('shop.detail', ['slug' => $related->slug])}}" class="tpproduct__thumb-img">
                                                    <img src="{{ asset('store/product/image/'. $productImages[1]->image_path) }}" width="250px;" alt="Product Image 2">
                                                </a>
                                            @else($productImages->count() == 1)
                                                <a href="{{route('shop.detail', ['slug' => $related->slug])}}">
                                                    <img src="{{ asset('store/product/image/'. $productImages[0]->image_path) }}" width="250px;" alt="Product Image 1">
                                                </a>
                                            @endif
                                            <div class="tpproduct__info bage">
                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                            </div>
                                            <div class="tpproduct__shopping">
                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="tpproduct__content">
                                            <h4 class="tpproduct__title">
                                                <a href="{{route('shop.detail', ['slug' => $related->slug])}}">{{$related->name}}</a>
                                            </h4>
                                            @php
                                                $averageRating = $related->reviews->avg('rating');
                                                $maxStars = 5;
                                            @endphp
                                            <div class="tpproduct__rating mb-5">
                                                @for($i = 1; $i <= $maxStars; $i++)
                                                    @if($i <= $averageRating)
                                                        <a href="#"><i class="icon-star"></i></a>
                                                    @else
                                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                                    @endif
                                                @endfor
                                            </div>
                                            <div class="tpproduct__price">
                                                @if($related->discount)
                                                    @php
                                                        if($related->discount->percentage) {
                                                            $discountedPrice = $related->price - ($related->price * $related->discount->percentage / 100);
                                                        } elseif($related->discount->amount) {
                                                            $discountedPrice = $related->price - $related->discount->amount;
                                                        } else {
                                                            $discountedPrice = $related->price;
                                                        }
                                                    @endphp
                                                    <span>Rp. {{ number_format($discountedPrice, 0, ',', '.') }}</span>
                                                    <del>Rp. {{ number_format($related->price, 0, ',', '.') }}</del>
                                                @else
                                                    <span>Rp. {{ number_format($related->price, 0, ',', '.') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tpproduct__hover-text">
                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="tpproduct__descrip">
                                                <ul>
                                                    <li>Type: Organic</li>
                                                    <li>MFG: August 4.2021</li>
                                                    <li>LIFE: 60 days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-area-end -->

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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const starLabels = document.querySelectorAll('#star-rating label');

            starLabels.forEach(label => {
                label.addEventListener('click', function() {
                    const selectedValue = this.getAttribute('data-value');

                    starLabels.forEach(label => {
                        label.querySelector('i').classList.remove('icon-star');
                        label.querySelector('i').classList.add('icon-star_outline1');
                    });

                    for (let i = 0; i < selectedValue; i++) {
                        starLabels[i].querySelector('i').classList.remove('icon-star_outline1');
                        starLabels[i].querySelector('i').classList.add('icon-star');
                    }
                });
            });
        });

    </script>
@endsection
