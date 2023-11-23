<!DOCTYPE html>
<html lang="fr">

<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <title>{{ config('app.name') }} | {{ isset($titre) ? $titre : '' }} </title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/lqd-essentials.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/digital-hub.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modern-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- Fonts -->
		<link rel="stylesheet" href="https://use.typekit.net/TYPEKIT_ID.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@700&display=swap" rel="stylesheet"> --}}
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="{{ asset('common/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('common/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('common/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset('common/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset('common/css/style.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('common/newimg/tbg-rond.gif') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('common/newimg/tbg-rond.gif') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/sweetalert/sweetalert.css') }}" >
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        @include('parties.navbar')
        @yield('content')
        @include('parties.footer')
    </div>
    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{ asset('common/js/jquery.js') }}"></script>
    <script src="{{ asset('common/js/popper.min.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('common/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('common/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('common/js/main-slider-script.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('common/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('common/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('common/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('common/js/wow.js') }}"></script>
    <script src="{{ asset('common/js/appear.js') }}"></script>
    <script src="{{ asset('common/js/select2.min.js') }}"></script>
    <script src="{{ asset('common/js/swiper.min.js') }}"></script>
    <script src="{{ asset('common/js/owl.js') }}"></script>
    <script src="{{ asset('common/js/script.js') }}"></script>
    <script src="{{ asset('js/contact.form.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
</body>

</html>
