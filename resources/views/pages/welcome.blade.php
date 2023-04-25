<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | {{ isset($titre)?$titre:"" }} </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/rdp-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('js/parsley/parsley.css') }}">
    <link href="{{ asset('css/lity.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
</head>

<body>
    <!-- DEBUT PAGE -->
    <main>
        <div class="wrapper">
            @include('parties.menu')
            @yield('content')
            @include('parties.footer')
            <!-- Chargement -->
            {{--  <div class="loading">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="mr-auto ml-auto text-white" style="margin-top: 100px;">
                    <h1 style="font-weight: 600;">Chargement</h1>
                </div>
            </div>  --}}
            <!-- --------- -->


            <button class="btn btn-primary" id="topBtn"><i class="fa fa-angle-up"></i></button>
            <div class="menu-resp">
                <ul>
                    <li>
                        <a href="#banner">Accueil</a>
                    </li>
                    <li>
                        <a href="#about">Qui sommes-nous</a>
                    </li>
                    <li>
                        <a href="#service">Nos services</a>
                    </li>
                    <li>
                        <a href="#portfolios">Portfolio</a>
                    </li>
                    <li>
                        <a href="#team">Team</a>
                    </li>
                    @if($titre=='Home')
                  @if(!$event->isEmpty())
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle nav-link mr-4 scrollTop"
                                style='border:none; background:transparent;'>
                                S'enregistrer pour
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @foreach ($event as $e)
                                <li class="list-item">
                                    <a class="dropdown-item mr-4" href="enregistrer/{{$e->id}}">{{$e->grandtitre}}</a>
                                </li>
                                @endforeach
                            </div>
                        </div>
                    @else
                    @endif
                    @endif
                </ul>
            </div>
        </div>
    </main>
    <!-- FIN -->
    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/typing.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/scriptcarousel.js') }}"></script>
    {{--  <script src="{{ asset('assets/slimscroll/jquery.slimscroll.min.js') }}"></script>  --}}

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('js/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('js/parsley/i18n/fr.js') }}"></script>
    {{--  <script src="{{ asset('assets/js/inspinia.js') }}"></script>
    <script src="{{ asset('assets/pace/pace.min.js') }}"></script>  --}}


    <script src="{{ asset('js/lity.min.js') }}"></script>
    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fcb9894a1d54c18d8f0bac5/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script> --}}
    <!--End of Tawk.to Script-->
    <script>
        $(document).ready(function () {
            //  nousContacter();
            $(".nav-link").removeClass("active");

            menu();
            $("#formreservation").on("submit", function (e) {
                e.preventDefault();

                add("#formreservation", '#btnform', 'addreservation');
            });
        });

        function menu() {
            var a = window.location.pathname;
            var txt = a.indexOf('detail.portfolio');
            var txt2 = a.indexOf('enregistrer');

            if (txt == true || txt2 == true) {
                $('.nav-link').addClass("invisible");
                $('#linkretour').removeClass("invisible");
                $('.menu_back').addClass("show");
            } else {
                $('.nav-link').removeClass("invisible");
                $('#linkretour').addClass("invisible");
                $('.menu_back').removeClass("show");
            }
        }

        // function nousContacter() {
        //     $("#formcontact").on("submit", function (e) {
        //         e.preventDefault();
        //         alert('ok');
        //         $.ajax({
        //             url: "message",
        //             method: "POST",
        //             data: $("#formrole").serialize(),
        //             success: function (data) {
        //                 alert(data.msg);
        //                 $("#formcontact")[0].reset();
        //             },
        //         });
        //     });

        // }
        $('.scrollTop').click(function () {
            var getElement = $(this).attr('href');
            if ($(getElement).length) {
                var getOffset = $(getElement).offset().top - $('.navbar').height();
                $('html,body').animate({
                    scrollTop: getOffset
                }, 1000);
            }
            return false;
        })
        $(window).scroll(function () {

            if ($(this).scrollTop() > 40) {
                $("#topBtn").fadeIn();
                $(".header-div").addClass('fixe')
                $(".toolbar").slideUp();
                $(".navbar").addClass('bg-white');
                $(".img1").addClass('hidden')
                $(".img2").addClass('show')
            } else {
                $("#topBtn").fadeOut();
                $(".header-div").removeClass('fixe')
                $(".toolbar").slideDown();
                $(".navbar").removeClass('bg-white')
                $(".img1").removeClass('hidden')
                $(".img2").removeClass('show')
            }
        });
        $("#topBtn").click(function () {
            $('html,body').animate({
                scrollTop: 0
            }, 1500)
            $(".nav-link").removeClass("active");
            $('#banner').addClass('active');
        })
        $(".btn-contact").click(function () {
            $(".nav-link").removeClass("active");
            $('#banner').addClass('active');

        })


        $(".nav-link").click(function () {
            var a = window.location.pathname;
            var txt = a.indexOf('detail.portfolio');

            if (txt == true) {
                var host = window.location.host;
                var id = $(this).attr('id');
                $(this).attr('href', 'home/' + "#" + id);
            } else {
                var id = $(this).attr('id');
                $(".nav-link").removeClass("active")
                $("#" + id).addClass("active")
            }
        })
        $('.menu').click(function () {
            $('.global-div').toggleClass('translate')
            $('.menu-resp').toggleClass('show')
            $('.menu').toggleClass('show')
        })
        $('.menu-resp li').click(function () {
                $('.menu-resp').removeClass('show')
                $('.menu').removeClass('show')
            });




        // Activate WOW.js plugin for animation on scrol
        new WOW().init();

        function add(form, idLoad, url) {
            //alert($(form).serialize());
            $(idLoad).addClass('disabled');
            $.ajax({
                url: "{{ route('addreservation') }}",
                method: "POST",
                data: $(form).serialize(),
                success: function (data) {
                    $(idLoad).removeClass('disabled');
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })

                        $(form)[0].reset();
                    }

                },
            });
        }

    </script>
</body>

</html>
