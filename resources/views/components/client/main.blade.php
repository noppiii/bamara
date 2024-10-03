
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    @include('components.client.css.style')
    <style>
        .swal2-container {
            z-index: 9999;
        }
    </style>
    @stack('style')
    <!-- SweetAlert 2 CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
    @stack('scripts')
</head>
<body>

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="icon-chevrons-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area-start -->
@include('components.client.header')
<!-- header-area-end -->

<!-- page content -->
@yield('content')
<!-- page content End -->

<!-- footer-area-start -->
@include('components.client.footer')
<!-- footer-area-end -->

<!-- JS here -->
@include('components.client.js.script')
@stack('script')
{{-- sweet alert --}}
@if (Session::has('success_message'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });

        Toast.fire({
            icon: 'success',
            title: '{{ Session::get('success_message') }}'
        });
    </script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Oops...',
                html: '{{ $error }}'
            });
        </script>
    @endforeach
@endif

@if (Session::has('error_message'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ Session::get('error_message') }}",
            showConfirmButton: false,
            timer: 3000 // milliseconds
        });
    </script>
@endif

@if (Session::has('error_message_not_found'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ Session::get('error_message_not_found') }}",
            showConfirmButton: false,
            timer: 3000 // milliseconds
        });
    </script>
@endif

@if (Session::has('error_message_delete'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ Session::get('error_message_delete') }}",
            showConfirmButton: false,
            timer: 3000 // milliseconds
        });
    </script>
@endif

@if (Session::has('success_message_create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ Session::get('success_message_create') }}",
            showConfirmButton: false,
            timer: 3000 // milliseconds
        });
    </script>
@endif

@if (Session::has('success_message_update'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ Session::get('success_message_update') }}",
            showConfirmButton: false,
            timer: 3000 // milliseconds
        });
    </script>
@endif

@if (Session::has('success_message_delete'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ Session::get('success_message_delete') }}",
            showConfirmButton: false,
            timer: 3000 // milliseconds
        });
    </script>
@endif
</body>
</html>
