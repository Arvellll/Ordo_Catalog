<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="color-scheme" content="light dark">
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset("./assets/images/favicon.png") }}"> --}}

    <title>Ordo Catalog - @yield('title')</title>
    <link rel="icon" type="image/jpg" href="{{asset('assets/images/logo.png')}}"/>

    {{-- Font Awesome --}}
    <script src="https://kit-pro.fontawesome.com/releases/v5.15.3/js/pro.min.js" data-auto-fetch-svg></script>

    {{-- Favicons --}}
    <link href="{{ asset('assets/logo/favicon.svg') }}" rel="icon">
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" /> --}}

    {{-- Swipper --}}
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

    {{-- Bootstrap 4 CSS & Icons --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

    {{-- Animate on Scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Main CSS File --}}
    @foreach (File::glob(public_path('build/assets/*.css')) as $file)
        <link rel="stylesheet" href="{{ asset('build/assets/' . basename($file)) }}" />
    @endforeach
    @vite(['resources/sass/landing/landing.scss'])

    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('style')
    @stack('style')

</head>

<body class="@yield('class-body')">

    @stack('modal')
    @yield('content')

    {{-- Bootstrap 4 JS --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- jQuery Mask --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

    {{-- Select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

    {{-- swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    {{-- <script>
        AOS.init();

        if (navigator.userAgent.match(/samsung/i)) {
            alert("Anda menggunakan browser yang bermasalah (Samsung Internet) yang mungkin tidak dikonfigurasi untuk menampilkan situs web ini dengan baik. Anda sebaiknya menggunakan browser yang sesuai dengan standar. \n\n" + "Kami merekomendasikan menggunakan Firefox, Microsoft Edge, atau Google Chrome.");
        }
    </script> --}}

    @stack('script')
    @yield('script')
</body>

</html>

 {{-- dari project sebelumnya --}}
