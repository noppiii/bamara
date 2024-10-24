
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="horizontal-menu-template"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title')</title>

    <meta name="description" content="" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
          href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet"
      />

    @include('components.admin.css.style')
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
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->

          @include('components.admin.sidebar')
          <!-- / Menu -->

          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->

            @include('components.admin.navbar')

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->

              @yield('content')
              <!-- / Content -->

              <!-- Footer -->
              @include('components.admin.footer')
              <!-- / Footer -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
      </div>
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

    @if (Session::has('error_message_update_details'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ Session::get('error_message_update_details') }}",
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
                title: 'Success',
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
                title: 'Success',
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
                title: 'Success',
                text: "{{ Session::get('success_message_delete') }}",
                showConfirmButton: false,
                timer: 3000 // milliseconds
            });
        </script>
    @endif
    @include('components.admin.js.script')
    {{-- <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/forms-file-upload.js') }}"></script> --}}
    @stack('script')
  </body>
</html>
