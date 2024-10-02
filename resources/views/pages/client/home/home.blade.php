@extends('components.client.main')
@section('title')
    Home | {{ config('app.name') }}
@endsection
@section('pages')
    Home
@endsection
@section('content')
    <main>

        <!-- hero-area-start -->
        <section class="hero-area tphero__bg" data-background="{{asset('client/assets/img/banner/banner-7.png')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-7 order-2 order-sm-1 order-xs-1">
                        <div class="tphero__wrapper p-relative">
                            <h5 class="tphero__sub-title mb-40">Top Seller In The Week</h5>
                            <h3 class="tphero__title mb-25">Perfect <br> Your Healthy Life.</h3>
                            <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good and taste even
                                better.</p>
                            <div class="tphero__btn">
                                <a href="shop-2.html" class="tp-btn banner-btn">Shop Now</a>
                            </div>
                            <div class="tphero__wrapper-shape pera tphero__thumb-img">
                                <img data-depth="1.3" src="{{asset('client/assets/img/shape/fruits-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-5 order-1 order-sm-2 order-xs-2">
                        <div class="tphero__thumb tphero__pt p-relative pt-80">
                            <div class="pera2 ">
                                <img data-depth="1" src="{{asset('client/assets/img/shape/coca1.png')}}"
                                     alt="coca-shape-1">
                            </div>
                            <div class="tphero__thumb-shape  d-none d-md-block">
                                <div class="tphero__thumb-shape-one pera3 tphero__thumb-img">
                                    <img data-depth="2.4" src="{{asset('client/assets/img/shape/coca2.png')}}"
                                         alt="coca-shape-2">
                                </div>
                                <div class="tphero__thumb-shape-three pera4 tphero__thumb-img  d-none d-xxl-block">
                                    <img data-depth="1.3" src="{{asset('client/assets/img/shape/fruits-2.png')}}"
                                         alt="coca-shape-2">
                                </div>
                                <div class="tphero__thumb-shape-four pera5 tphero__thumb-img  d-none d-md-block">
                                    <img data-depth="5" src="{{asset('client/assets/img/shape/tree-leaf-7.png')}}"
                                         alt="coca-shape-2">
                                </div>
                                <div class="tphero__thumb-shape-five pera6 tphero__thumb-img  d-none d-md-block">
                                    <img data-depth="1.8" src="{{asset('client/assets/img/shape/tree-leaf-8.png')}}"
                                         alt="coca-shape-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area-end -->

        <!-- about-area-start -->
        <section class="about-area pt-55">
            <div class="container">
                <div class="tpabout__border pb-35">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tpabout__title-img text-center mb-45">
                                <img class="tpcbout__thumb-title mb-25"
                                     src="{{asset('client/assets/img/shape/about-img-2.png')}}" alt="">
                                <p>We are Online Market of fresh fruits & vegetables. <br> You can also find organic &
                                    healthy juice, processed food as <br>well as gentle skin tcare at our store.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="tpabout__item text-center mb-40">
                                <div class="tpabout__icon mb-15">
                                    <img src="{{asset('client/assets/img/icon/about-svg1.svg')}}" alt="">
                                </div>
                                <div class="tpabout__content">
                                    <h4 class="tpabout__title">Select Your Products</h4>
                                    <p>Choose from select produce to start. <br> Keep, add, or remove items.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="tpabout__item text-center mb-40">
                                <div class="tpabout__icon mb-15">
                                    <img src="{{asset('client/assets/img/icon/about-svg2.svg')}}" alt="">
                                </div>
                                <div class="tpabout__content">
                                    <h4 class="tpabout__title">Our Shop Orfarm </h4>
                                    <p>We provide 100+ products, provide <br> enough nutrition for your family.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="tpabout__item text-center mb-40">
                                <div class="tpabout__icon mb-15">
                                    <img src="{{asset('client/assets/img/icon/about-svg3.svg')}}" alt="">
                                </div>
                                <div class="tpabout__content">
                                    <h4 class="tpabout__title">Delivery To Your </h4>
                                    <p>Delivery to your door. Up to 100km <br> and it's completely free.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- product-area-start -->
        <section class="weekly-product-area whight-product pt-75 pb-75 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-20">
                            <h4 class="tpsection__sub-title">~ Special Products ~</h4>
                            <h4 class="tpsection__title">Weekly Food Offers</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpnavtab__area pb-40">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                            aria-selected="true">All Products
                                    </button>
                                    <button class="nav-link" id="nav-meat-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-meat" type="button" role="tab" aria-controls="nav-meat"
                                            aria-selected="false">Fresh Meat
                                    </button>
                                    <button class="nav-link" id="nav-vegetables-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-vegetables" type="button" role="tab"
                                            aria-controls="nav-vegetables" aria-selected="false">Fresh Vegetables
                                    </button>
                                    <button class="nav-link" id="nav-snacks-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-snacks" type="button" role="tab"
                                            aria-controls="nav-snacks" aria-selected="false">Biscuits Snack
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                     aria-labelledby="nav-all-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products29-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products30-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From
                                                                    VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products9-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products10-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">Soda Sparkling Water Maker
                                                                    (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products13-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products35-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-10%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">HOT - Lettuce Fresh Produce
                                                                    Fruit Vegetables</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products27-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products14-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-90%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Pure Irish Organic Beef
                                                                    Quarter Pounder Burgers</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products15-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products32-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                    Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products12-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products28-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites
                                                                    Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i
                                                        class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                                        class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-meat" role="tabpanel" aria-labelledby="nav-meat-tab"
                                     tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products30-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products29-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From
                                                                    VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products10-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products9-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">Soda Sparkling Water Maker
                                                                    (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products15-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products32-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">Soda Sparkling Water Maker
                                                                    (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products29-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products30-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From
                                                                    VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products9-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products10-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">Soda Sparkling Water Maker
                                                                    (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products26-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products9-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>,
                                                   <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                    Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i
                                                        class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                                        class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-vegetables" role="tabpanel"
                                     aria-labelledby="nav-vegetables-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products21-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details-grid.html"><img
                                                                    src="{{asset('client/assets/img/product/products1-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>,
                                                   <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From
                                                                    VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products22-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details-grid.html"><img
                                                                    src="{{asset('client/assets/img/product/products11-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">Soda Sparkling Water Maker
                                                                    (Rose Gold)</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products4-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details-grid.html"><img
                                                                    src="{{asset('client/assets/img/product/products23-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-10%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">HOT - Lettuce Fresh Produce
                                                                    Fruit Vegetables</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products27-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products14-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-90%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Pure Irish Organic Beef
                                                                    Quarter Pounder Burgers</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products16-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details-grid.html"><img
                                                                    src="{{asset('client/assets/img/product/products11-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>,
                                                   <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                    Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products17-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details-grid.html"><img
                                                                    src="{{asset('client/assets/img/product/products37-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites
                                                                    Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i
                                                        class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                                        class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-snacks" role="tabpanel"
                                     aria-labelledby="nav-snacks-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products21-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details-grid.html"><img
                                                                    src="{{asset('client/assets/img/product/products1-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>,
                                                   <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-top-.html">Mangosteen Organic From
                                                                    VietNamese</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products13-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products35-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-10%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details.html">HOT - Lettuce Fresh Produce
                                                                    Fruit Vegetables</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products27-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products14-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-90%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Pure Irish Organic Beef
                                                                    Quarter Pounder Burgers</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products15-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products32-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                    Organic - 250gram</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products12-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details.html"><img
                                                                    src="{{asset('client/assets/img/product/products28-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites
                                                                    Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{asset('client/assets/img/product/products17-min.jpg')}}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                               href="shop-details-grid.html"><img
                                                                    src="{{asset('client/assets/img/product/products37-min.jpg')}}"
                                                                    alt=""></a>
                                                            <div class="tpproduct__info bage">
                                                                <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
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
                                                <span class="tpproduct__content-weight">
                                                   <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="shop-details-grid.html">Laffy Taffy Laff Bites
                                                                    Gone Bananas - 4 Packs</a>
                                                            </h4>
                                                            <div class="tpproduct__rating mb-5">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                            <div class="tpproduct__price">
                                                                <span>$56.00</span>
                                                                <del>$19.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="tpproduct__hover-text">
                                                            <div
                                                                class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i
                                                        class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                                        class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpproduct__all-item text-center">
                        <span>Discover thousands of other quality products.
                           <a href="shop-3.html">Shop All Products <i class="icon-chevrons-right"></i></a>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-area-end -->

        <!-- product-coundown-area-start -->
        <section class="product-coundown-area tpcoundown__bg tpcoundown__bg-green pb-25"
                 data-background="{{asset('client/assets/img/banner/coundpwn-bg-1.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpcoundown p-relative ml-175">
                            <div class="section__content mb-35">
                                <span class="section__sub-title mb-10">~ Deals Of The Day ~</span>
                                <h2 class="section__title mb-25">Premium Drinks <br> Fresh Farm Product</h2>
                                <p>The liber tempor cum soluta nobis eleifend option congue <br>
                                    doming quod mazim placerat facere possum assam going through.</p>
                            </div>
                            <div class="tpcoundown__count">
                                <h4 class="tpcoundown__count-title">hurry up! Offer End In:</h4>
                                <div class="tpcoundown__countdown" data-countdown="2024/06/11"></div>
                                <div class="tpcoundown__btn mt-50">
                                    <a class="whight-btn" href="shop-details-top.html">Shop Now</a>
                                    <a class="whight-btn border-btn ml-15" href="shop-3.html">View Menu</a>
                                </div>
                            </div>
                            <div class="tpcoundown__shape d-none d-lg-block">
                                <img class="tpcoundown__shape-one"
                                     src="{{asset('client/assets/img/shape/tree-leaf-1.svg')}}" alt="">
                                <img class="tpcoundown__shape-two"
                                     src="{{asset('client/assets/img/shape/tree-leaf-2.svg')}}" alt="">
                                <img class="tpcoundown__shape-three"
                                     src="{{asset('client/assets/img/shape/tree-leaf-3.svg')}}" alt="">
                                <img class="tpcoundown__shape-four"
                                     src="{{asset('client/assets/img/shape/fresh-shape-1.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-coundown-area-end -->

        <!-- brand-product-area-start -->
        <section class="brand-product pt-75 pb-60">
            <div class="container">
                <div class="white-bg pb-40 brand-product">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="tpsection mb-35">
                                <h4 class="tpsection__sub-title">~ Best Products ~</h4>
                                <h4 class="tpsection__title">This week’s highlights</h4>
                                <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products15-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Lettuce Fresh Produce Vegetables</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products20-min.jpg')}}" alt="">
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Cheap and delicious fresh chicken</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products23-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-hot bage__hot">HOT</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh Milk Chocolate Quaker Popped Rice Crisps</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products16-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">1kg purple onion/ onion/ dried onion Kinh men </a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products1-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-hot bage__hot">HOT</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">1st Quality Fresh Meat From USA 500g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products28-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh Organic Grape Tomatoes 100g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products31-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh And Sour Lemon Like An Old Lover</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products13-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-hot bage__hot">HOT</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh Organic Plum Moc Chau Trip 100g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{asset('client/assets/img/product/products17-min.jpg')}}" alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Enormous Granite Bag Fresh Goods 100%</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand-product-area-end -->

        <!-- banner-area-start -->
        <section class="banner-area">
            <div class="container-fluid g-0">
                <div class="row gx-0">
                    <div class="col-lg-6 col-sm-12">
                        <div class="tpbanner__main p-relative">
                            <div class="tpbanner__main-thumb tpbanner__bg2"
                                 data-background="{{asset('client/assets/img/banner/banner-9.jpg')}}">
                                <div class="tpbanner__main-content">
                                    <h5 class="tpbanner__main__sub-title mb-15">Weekend Deals</h5>
                                    <h5 class="tpbanner__main__title mb-40">Fresh Food <br> Restore Health</h5>
                                    <a class="tp-btn banner-btn" href="shop-details.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="tpbanner__main p-relative">
                            <div class="tpbanner__main-thumb tpbanner__bg2"
                                 data-background="{{asset('client/assets/img/banner/banner-8.jpg')}}">
                                <div class="tpbanner__main-content">
                                    <h5 class="tpbanner__main__sub-title tpbanner__yellow mb-15">Weekend Deals</h5>
                                    <h5 class="tpbanner__main__title tpbanner__white mb-40">Fresh Food <br> Restore
                                        Health</h5>
                                    <a class="tp-btn banner-btn" href="shop-details.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- testimonial-area-start -->
        <section class="testimonial-area tptestimonial__bg pt-115 pb-120 p-relative"
                 data-background="{{asset('client/assets/img/testimonial/testimonial-bg-1.jpg')}}">
            <div class="container">
                <div class="testimonial__shape p-relative d-none d-md-block">
                    <img src="{{asset('client/assets/img/shape/tree-leaf-4.svg')}}" alt=""
                         class="testimonial__shape-one">
                    <img src="{{asset('client/assets/img/shape/tree-leaf-5.svg')}}" alt=""
                         class="testimonial__shape-two">
                    <img src="{{asset('client/assets/img/shape/tree-leaf-6.png')}}" alt=""
                         class="testimonial__shape-three">
                </div>
                <div class="swiper-container tptestimonial-active2 p-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row justify-content-center p-relative">
                                <div class="col-md-12">
                                    <div class="tptestimonial__item text-center ">
                                        <div class="tptestimonial__avata mb-25">
                                            <img src="{{asset('client/assets/img/testimonial/test-avata-1.png')}}"
                                                 alt="">
                                        </div>
                                        <div class="tptestimonial__content tptestimonial__content2">
                                            <p>" I think Hub is the best theme I ever seen this year. Amazing <br>
                                                design, easy to customize and a design quality superlative <br> account
                                                on its cloud platform for the optimized performance. "
                                            </p>
                                            <div class="tptestimonial__rating mb-5">
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                            </div>
                                            <h4 class="tptestimonial__title">Algistino Lionel</h4>
                                            <span
                                                class="tptestimonial__avata-position">Web Designer at Blueskytechco</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row justify-content-center p-relative">
                                <div class="col-md-12">
                                    <div class="tptestimonial__item text-center ">
                                        <div class="tptestimonial__avata mb-25">
                                            <img src="{{asset('client/assets/img/testimonial/test-avata-2.png')}}"
                                                 alt="">
                                        </div>
                                        <div class="tptestimonial__content tptestimonial__content2">
                                            <p>" Thanks guys, keep up the good work! Great job, I will <br>
                                                definitely be ordering again! Thanks guys, keep up the good <br> work!
                                                Garden was worth a fortune to my company. "
                                            </p>
                                            <div class="tptestimonial__rating mb-5">
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                            </div>
                                            <h4 class="tptestimonial__title">Jackson Roben</h4>
                                            <span
                                                class="tptestimonial__avata-position">Web Designer at Blueskytechco</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row justify-content-center p-relative">
                                <div class="col-md-12">
                                    <div class="tptestimonial__item text-center ">
                                        <div class="tptestimonial__avata mb-25">
                                            <img src="{{asset('client/assets/img/testimonial/test-avata-3.png')}}"
                                                 alt="">
                                        </div>
                                        <div class="tptestimonial__content tptestimonial__content2">
                                            <p>" Love the easy and beautiful designed page builder <br>
                                                and the documentation. All in one landing and startup <br> solutions
                                                endless use-cases that make it highly. "
                                            </p>
                                            <div class="tptestimonial__rating mb-5">
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                            </div>
                                            <h4 class="tptestimonial__title">Lionel</h4>
                                            <span
                                                class="tptestimonial__avata-position">Web Designer at Blueskytechco</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tptestimonial-arrow d-none d-md-block">
                <button class="testi-arrow tptestimonial__prv">
                    <i class="icon-chevron-left"></i>
                </button>
                <button class="testi-arrow tptestimonial__nxt">
                    <i class="icon-chevron-right"></i>
                </button>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area-start -->
        <section class="blog-area pt-75 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <h4 class="tpsection__sub-title">~ Read Our Blog ~</h4>
                            <h4 class="tpsection__title">Our Latest Post</h4>
                            <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container tpblog-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-1.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Avocado Grilled Salmon, Rich
                                            In Nutrients For The Body</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-2.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of
                                            Fresh Beef For Women's Health</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-3.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits &
                                            Seafoods Good For Pregnancy</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-4.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Shopping</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Summer Breakfast For The
                                            Healthy Morning With Tomatoes</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-5.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Foods</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Popular Reasons You Must
                                            Drinks Juice Everyday</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-6.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Perfect Quality Reasonable
                                            Price For Your Family</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-7.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="shop-details.html">Dairy Farm</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits Seafoods
                                            Good For Pregnancy</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <a href="blog-details.html"><img
                                            src="{{asset('client/assets/img/blog/blog-bg-8.jpg')}}" alt=""></a>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">organis</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of
                                            Fresh Beef For Women’s Health</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- subscribe-area-start -->
        <div class="subscribe-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-10 col-lg-12 col-sm-12">
                        <div class="tpsubscribe__item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="tpsubscribe__content">
                                        <p>Subscribe to the Orfarm mailing list to receive updates <br>
                                            on new arrivals & other information.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="tpsubscribe__form p-relative">
                                        <form action="#">
                                            <span><i><img src="{{asset('client/assets/img/shape/message-1.svg')}}"
                                                          alt=""></i></span>
                                            <input type="email" placeholder="Your email address...">
                                            <button class="tpsubscribe__form-btn">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe-are-end -->

    </main>
@endsection
