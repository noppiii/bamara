@extends('components.client.main')
@section('title')
    Shop | {{ config('app.name') }}
@endsection
@section('pages')
    Shop
@endsection
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area grey-bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list">
                                <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                                <span class="dvdr">/</span>
                                <span>Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- shop-area-start -->
        <section class="shop-area-start grey-bg pb-200">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-12 col-md-12">
                        <div class="tpshop__leftbar">
                            <div class="tpshop__widget mb-30 pb-25">
                                <h4 class="tpshop__widget-title">Product Categories</h4>
                                @foreach($allCategoryProduct as $category)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $category->id }}"
                                               id="flexCheckDefault{{ $category->id }}">
                                        <label class="form-check-label" for="flexCheckDefault{{ $category->id }}">
                                            {{ $category->name }} (08)
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                            <div class="tpshop__widget mb-30 pb-25">
                                <h4 class="tpshop__widget-title">FILTER BY TAG</h4>
                                @foreach($allTagProduct as $tag)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $tag->id }}"
                                               id="flexCheckDefault{{ $tag->id }}">
                                        <label class="form-check-label" for="flexCheckDefault{{ $tag->id }}">
                                            {{$tag->name}} (15)
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="tpshop__widget">
                                <h4 class="tpshop__widget-title">FILTER BY RATING</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24">
                                    <label class="form-check-label" for="flexCheckDefault24">
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        (45)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" checked
                                           id="flexCheckDefault25">
                                    <label class="form-check-label" for="flexCheckDefault25">
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_outline"></i>
                                        (10)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" checked
                                           id="flexCheckDefault26">
                                    <label class="form-check-label" for="flexCheckDefault26">
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_outline"></i>
                                        <i class="icon-star_outline"></i>
                                        (05)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27">
                                    <label class="form-check-label" for="flexCheckDefault27">
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_outline"></i>
                                        <i class="icon-star_outline"></i>
                                        <i class="icon-star_outline"></i>
                                        (02)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">
                                    <label class="form-check-label" for="flexCheckDefault28">
                                        <i class="icon-star_rate"></i>
                                        <i class="icon-star_outline"></i>
                                        <i class="icon-star_outline"></i>
                                        <i class="icon-star_outline"></i>
                                        <i class="icon-star_outline"></i>
                                        (02)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tpshop__widget">
                            <div class="tpshop__sidbar-thumb mt-35">
                                <img src="{{asset('client/assets/img/shape/sidebar-product-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-12 col-md-12">
                        <div class="tpshop__top ml-60">
                            <div class="tpshop__banner mb-30"
                                 data-background="{{asset('client/assets/img/banner/shop-bg-10.jpg')}}">
                                <div class="tpshop__content text-center">
                                    <span>The Salad</span>
                                    <h4 class="tpshop__content-title mb-20">Fresh & Natural <br>Healthy Food Special
                                        Offer</h4>
                                    <p>Do not miss the current offers of us!</p>
                                </div>
                            </div>
                            <div class="product__filter-content mb-40">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <div class="product__item-count">
                                            <span>Showing 1 - 18 of 40 Products</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div
                                            class="tpproductnav tpnavbar product-filter-nav d-flex align-items-center justify-content-center">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link" id="nav-all-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-all" type="button" role="tab"
                                                            aria-controls="nav-all" aria-selected="false">
                                                        <i>
                                                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M2 10C3.10457 10 4 9.10457 4 8C4 6.89543 3.10457 6 2 6C0.89543 6 0 6.89543 0 8C0 9.10457 0.89543 10 2 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M2 16C3.10457 16 4 15.1046 4 14C4 12.8954 3.10457 12 2 12C0.89543 12 0 12.8954 0 14C0 15.1046 0.89543 16 2 16Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M8 4C9.10457 4 10 3.10457 10 2C10 0.89543 9.10457 0 8 0C6.89543 0 6 0.89543 6 2C6 3.10457 6.89543 4 8 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M8 16C9.10457 16 10 15.1046 10 14C10 12.8954 9.10457 12 8 12C6.89543 12 6 12.8954 6 14C6 15.1046 6.89543 16 8 16Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M14 4C15.1046 4 16 3.10457 16 2C16 0.89543 15.1046 0 14 0C12.8954 0 12 0.89543 12 2C12 3.10457 12.8954 4 14 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M14 10C15.1046 10 16 9.10457 16 8C16 6.89543 15.1046 6 14 6C12.8954 6 12 6.89543 12 8C12 9.10457 12.8954 10 14 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M14 16C15.1046 16 16 15.1046 16 14C16 12.8954 15.1046 12 14 12C12.8954 12 12 12.8954 12 14C12 15.1046 12.8954 16 14 16Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M20 4C21.1046 4 22 3.10457 22 2C22 0.89543 21.1046 0 20 0C18.8954 0 18 0.89543 18 2C18 3.10457 18.8954 4 20 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M20 10C21.1046 10 22 9.10457 22 8C22 6.89543 21.1046 6 20 6C18.8954 6 18 6.89543 18 8C18 9.10457 18.8954 10 20 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M20 16C21.1046 16 22 15.1046 22 14C22 12.8954 21.1046 12 20 12C18.8954 12 18 12.8954 18 14C18 15.1046 18.8954 16 20 16Z"
                                                                    fill="currentColor"/>
                                                            </svg>
                                                        </i>
                                                    </button>
                                                    <button class="nav-link active" id="nav-popular-tab"
                                                            data-bs-toggle="tab" data-bs-target="#nav-popular"
                                                            type="button" role="tab" aria-controls="nav-popular"
                                                            aria-selected="true">
                                                        <i>
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M2 10C3.10457 10 4 9.10457 4 8C4 6.89543 3.10457 6 2 6C0.89543 6 0 6.89543 0 8C0 9.10457 0.89543 10 2 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M2 16C3.10457 16 4 15.1046 4 14C4 12.8954 3.10457 12 2 12C0.89543 12 0 12.8954 0 14C0 15.1046 0.89543 16 2 16Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M8 4C9.10457 4 10 3.10457 10 2C10 0.89543 9.10457 0 8 0C6.89543 0 6 0.89543 6 2C6 3.10457 6.89543 4 8 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M8 16C9.10457 16 10 15.1046 10 14C10 12.8954 9.10457 12 8 12C6.89543 12 6 12.8954 6 14C6 15.1046 6.89543 16 8 16Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M14 4C15.1046 4 16 3.10457 16 2C16 0.89543 15.1046 0 14 0C12.8954 0 12 0.89543 12 2C12 3.10457 12.8954 4 14 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M14 10C15.1046 10 16 9.10457 16 8C16 6.89543 15.1046 6 14 6C12.8954 6 12 6.89543 12 8C12 9.10457 12.8954 10 14 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M14 16C15.1046 16 16 15.1046 16 14C16 12.8954 15.1046 12 14 12C12.8954 12 12 12.8954 12 14C12 15.1046 12.8954 16 14 16Z"
                                                                    fill="currentColor"/>
                                                            </svg>
                                                        </i>
                                                    </button>
                                                    <button class="nav-link" id="nav-product-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-product" type="button" role="tab"
                                                            aria-controls="nav-product" aria-selected="false">
                                                        <i>
                                                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M2 10C3.10457 10 4 9.10457 4 8C4 6.89543 3.10457 6 2 6C0.89543 6 0 6.89543 0 8C0 9.10457 0.89543 10 2 10Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M2 16C3.10457 16 4 15.1046 4 14C4 12.8954 3.10457 12 2 12C0.89543 12 0 12.8954 0 14C0 15.1046 0.89543 16 2 16Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M20 2C20 2.552 19.553 3 19 3H7C6.448 3 6 2.552 6 2C6 1.448 6.448 1 7 1H19C19.553 1 20 1.447 20 2Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M20 8C20 8.552 19.553 9 19 9H7C6.448 9 6 8.552 6 8C6 7.448 6.448 7 7 7H19C19.553 7 20 7.447 20 8Z"
                                                                    fill="currentColor"/>
                                                                <path
                                                                    d="M20 14C20 14.552 19.553 15 19 15H7C6.448 15 6 14.552 6 14C6 13.447 6.448 13 7 13H19C19.553 13 20 13.447 20 14Z"
                                                                    fill="currentColor"/>
                                                            </svg>
                                                        </i>
                                                    </button>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product__navtabs d-flex justify-content-end align-items-center">
                                            <div class="tp-shop-selector">
                                                <select style="display: none;">
                                                    <option>Default sorting</option>
                                                    <option>Show 14</option>
                                                    <option>Show 08</option>
                                                    <option>Show 20</option>
                                                </select>
                                                <div class="nice-select" tabindex="0">
                                                   <span class="current">
                                                    @switch($filter)
                                                           @case('popular')
                                                               Sort by popularity
                                                               @break
                                                           @case('hot-promo')
                                                               Hot Promo
                                                               @break
                                                           @default
                                                               Default sorting
                                                       @endswitch
                                                   </span>
                                                    <ul class="list">
                                                        <li data-value="default"
                                                            class="option {{ $filter == 'default' ? 'selected' : '' }}">
                                                            <a href="{{ route('shop', ['filter' => 'default']) }}">Default sorting</a>
                                                        </li>
                                                        <li data-value="popular"
                                                            class="option {{ $filter == 'popular' ? 'selected' : '' }}">
                                                            <a href="{{ route('shop', ['filter' => 'popular']) }}">Sort by popularity</a>
                                                        </li>
                                                        <li data-value="hot-promo"
                                                            class="option {{ $filter == 'hot-promo' ? 'selected' : '' }}">
                                                            <a href="{{ route('shop', ['filter' => 'hot-promo']) }}">Hot Promo</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                    <div
                                        class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                        @foreach($products as $product)
                                            <div class="col">
                                                <div class="tpproduct p-relative mb-20">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{asset('client/assets/img/product/products21-min.jpg')}}"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                           href="shop-details-grid.html"><img
                                                                src="{{asset('client/assets/img/product/products1-min.jpg')}}"
                                                                alt=""></a>
                                                        @if($product->discount)
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-{{ $product->discount->percentage }}%</span>

                                                                @if($product->discount->percentage > 10)
                                                                    <span
                                                                        class="tpproduct__info-hot bage__hot">HOT</span>
                                                                @endif
                                                            </div>
                                                        @endif
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                               href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist" href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart" href="#"><i
                                                                    class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">
                                                                {{$product->name}}
                                                            </a>
                                                        </h4>
                                                        @php
                                                            $averageRating = $product->reviews->avg('rating');
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
                                                            <span>Rp{{ number_format($product->price - ($product->discount ? ($product->price * ($product->discount->percentage / 100)) : 0), 0, ',', '.') }}</span>
                                                            @if($product->discount)
                                                                <del>
                                                                    Rp{{ number_format($product->price, 0, ',', '.') }}</del>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Category:
                                                                    @foreach($product->categories as $category)
                                                                        <a href="#">{{ $category->name }}</a>
                                                                        @if(!$loop->last)
                                                                            ,
                                                                        @endif
                                                                    @endforeach
                                                                </li>

                                                                <li>Tag:
                                                                    @foreach($product->tags as $tag)
                                                                        <a href="#">{{ $tag->name }}</a>
                                                                        @if(!$loop->last)
                                                                            ,
                                                                        @endif
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade show active whight-product" id="nav-popular" role="tabpanel"
                                     aria-labelledby="nav-popular-tab">
                                    <div
                                        class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                        @foreach($products as $product)
                                            <div class="col">
                                                <div class="tpproduct p-relative mb-20">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{asset('client/assets/img/product/products21-min.jpg')}}"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                           href="shop-details-grid.html"><img
                                                                src="{{asset('client/assets/img/product/products1-min.jpg')}}"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            @if($product->discount)
                                                                <span
                                                                    class="tpproduct__info-discount bage__discount">-{{ $product->discount->percentage }}%</span>
                                                                @if($product->discount->percentage > 10)
                                                                    <span
                                                                        class="tpproduct__info-hot bage__hot">HOT</span>
                                                                @endif
                                                        </div>
                                                        @endif
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                               href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist" href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart" href="#"><i
                                                                    class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">
                                                                {{$product->name}}
                                                            </a>
                                                        </h4>
                                                        @php
                                                            $averageRating = $product->reviews->avg('rating');
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
                                                            <span>Rp{{ number_format($product->price - ($product->discount ? ($product->price * ($product->discount->percentage / 100)) : 0), 0, ',', '.') }}</span>
                                                            @if($product->discount)
                                                                <del>
                                                                    Rp{{ number_format($product->price, 0, ',', '.') }}</del>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Category:
                                                                    @foreach($product->categories as $category)
                                                                        <a href="#">{{ $category->name }}</a>
                                                                        @if(!$loop->last)
                                                                            ,
                                                                        @endif
                                                                    @endforeach
                                                                </li>

                                                                <li>Tag:
                                                                    @foreach($product->tags as $tag)
                                                                        <a href="#">{{ $tag->name }}</a>
                                                                        @if(!$loop->last)
                                                                            ,
                                                                        @endif
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade whight-product" id="nav-product" role="tabpanel"
                                 aria-labelledby="nav-product-tab">
                                @foreach($products as $product)
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div
                                                class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                                <div class="tplist__product-img">
                                                    <a href="#" class="tplist__product-img-one"><img
                                                            src="{{asset('client/assets/img/product/products1-min.jpg')}}" width="250px;" alt=""></a>
                                                    <a class="tplist__product-img-two" href="shop-details.html"><img
                                                            src="{{asset('client/assets/img/product/products1-min.jpg')}}" width="250px;" alt=""></a>
                                                    @if($product->discount)
                                                        <div class="tpproduct__info bage">
                                                            <span class="tpproduct__info-discount bage__discount">-{{ $product->discount->percentage }}%</span>

                                                            @if($product->discount->percentage > 10)
                                                                <span
                                                                    class="tpproduct__info-hot bage__hot">HOT</span>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="tplist__content">
                                                    <span>500 gram</span>
                                                    <h4 class="tplist__content-title"><a href="#">
                                                            {{$product->name}}
                                                        </a></h4>
                                                    @php
                                                        $averageRating = $product->reviews->avg('rating');
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
                                                    <ul class="tplist__content-info">
                                                        <li>Category:
                                                            @foreach($product->categories as $category)
                                                                <a href="#">{{ $category->name }}</a>
                                                                @if(!$loop->last)
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </li>

                                                        <li>Tag:
                                                            @foreach($product->tags as $tag)
                                                                <a href="#">{{ $tag->name }}</a>
                                                                @if(!$loop->last)
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tplist__price justify-content-end">
                                                    <h4 class="tplist__instock">Availability: <span>{{$product->stock}}</span></h4>
                                                    <h3 class="tplist__count mb-15"> <span>Rp{{ number_format($product->price - ($product->discount ? ($product->price * ($product->discount->percentage / 100)) : 0), 0, ',', '.') }}</span>
                                                        @if($product->discount)
                                                            <del style="color: grey;">
                                                                Rp{{ number_format($product->price, 0, ',', '.') }}</del>
                                                        @endif</h3>
                                                    <button class="tp-btn-2 mb-10">Add to cart</button>
                                                    <div class="tplist__shopping">
                                                        <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                                        <a href="#"><i class="icon-layers"></i>Compare</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="basic-pagination text-center mt-35">
                                <nav>
                                    <ul>
                                        <li>
                                            <span class="current">1</span>
                                        </li>
                                        <li>
                                            <a href="blog.html">2</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">3</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">
                                                <i class="icon-chevrons-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->


        <!-- feature-area-start -->
        <section class="feature-area mainfeature__bg grey-bg pt-50 pb-40"
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
