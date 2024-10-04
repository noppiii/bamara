@extends('components.client.main')
@section('title')
    Login | {{ config('app.name') }}
@endsection
@section('pages')
    Login
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
                                <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                                <span class="dvdr">/</span>
                                <span>Login</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- track-area-start -->
        <section class="track-area pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-12">
                        <div class="tptrack__product mb-40">
                            <div class="tptrack__content grey-bg">
                                <div class="tptrack__item d-flex mb-20">
                                    <div class="tptrack__item-icon">
                                        <i class="fal fa-user-unlock"></i>
                                    </div>
                                    <div class="tptrack__item-content">
                                        <h4 class="tptrack__item-title">Login Here</h4>
                                        <p>Your personal data will be used to support your experience throughout this
                                            website, to manage access to your account.</p>
                                    </div>
                                </div>
                                <div class="tptrack__id mb-10">
                                    <form id="loginForm" action="{{ route('login.post') }}" method="POST">
                                        @csrf
                                        <span><i class="fal fa-user"></i></span>
                                        <input type="email" id="email" name="email" placeholder="Email address"
                                               required>
                                    </form>
                                </div>
                                <div class="tptrack__email mb-10">
                                    <form id="passwordForm">
                                        <span><i class="fal fa-key"></i></span>
                                        <input type="password" id="password" name="password" placeholder="Password"
                                               required>
                                    </form>
                                </div>
                                <div class="tpsign__remember d-flex align-items-center justify-content-end mb-15">
                                    <div class="tpsign__account">
                                        <a href="{{route('register')}}">Don't Have an Account?</a>
                                    </div>
                                </div>
                                <div class="tptrack__btn mb-30">
                                    <button type="button" class="tptrack__submition active" id="loginButton">Login Now<i
                                            class="fal fa-long-arrow-right"></i></button>
                                </div>

                                <div class="tpsign__remember d-flex align-items-center justify-content-center">
                                    <div class="tpsign__pass">
                                        <h5 class="tptrack__item-title">Or</h5>
                                    </div>
                                </div>

                                <div class="tptrack__btn mb-30">
                                    <a href="{{route('google.login')}}"
                                       class="tptrack__submition active d-flex align-items-center justify-content-center position-relative bg-white"
                                       style="padding-left: 50px;">
                                        <img src="{{asset('client/assets/img/icon/icon-google.png')}}" width="40px"
                                             class="position-absolute" style="left: 20px;" alt="">
                                        <span class="mx-auto text-dark">Continue with Google</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- track-area-end -->


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
    <script>
        document.getElementById('loginButton').addEventListener('click', function () {
            submitLoginForm();
        });

        document.getElementById('password').addEventListener('keypress', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                submitLoginForm();
            }
        });

        function submitLoginForm() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ route('login.post') }}';

            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = '{{ csrf_token() }}';
            form.appendChild(csrfInput);

            const emailInput = document.createElement('input');
            emailInput.type = 'hidden';
            emailInput.name = 'email';
            emailInput.value = email;
            form.appendChild(emailInput);

            const passwordInput = document.createElement('input');
            passwordInput.type = 'hidden';
            passwordInput.name = 'password';
            passwordInput.value = password;
            form.appendChild(passwordInput);

            document.body.appendChild(form);
            form.submit();
        }
    </script>

@endsection
