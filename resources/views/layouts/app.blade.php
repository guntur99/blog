<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Menyediakan Informasi Teknologi Keren, Logis, Gak Logis dan Menarik lainnya.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Teknonlogis | Info Teknologi Keren & Logis/Gak?</title>

        <!-- Favicon  -->
        <link rel="shortcut icon" href="{{ asset('quitelight/images/teknonlogis_favicon.ico') }}" />

        <!-- Stylesheet -->
        <link href="{{ asset('quitelight/plugin-frameworks/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('quitelight/plugin-frameworks/swiper.css') }}" rel="stylesheet">

        <link href="{{ asset('quitelight/fonts/ionicons.css') }}" rel="stylesheet">


        <link href="{{ asset('quitelight/common/styles.css') }}" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176918173-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-176918173-1');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-55W6GJD');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55W6GJD"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Preloader Start -->
        <div id="preloader">
            <div class="preload-content">
                <div id="world-load"></div>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- ***** Header Area Start ***** -->
        @include('client.parts.header')
        <!-- ***** Header Area End ***** -->

        <!-- ********** Hero Area Start ********** -->
        @yield('content')
        <!-- ********** Hero Area Start ********** -->

        <!-- ***** Footer Area Start ***** -->
        @include('client.parts.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('summernote/summernote.js') }}"></script>
        <!-- ##### All Javascript Script ##### -->
        <script src="{{ asset('quitelight/plugin-frameworks/jquery-3.2.1.min.js') }}"></script>

        <script src="{{ asset('quitelight/plugin-frameworks/bootstrap.min.js') }}"></script>

        <script src="{{ asset('quitelight/plugin-frameworks/swiper.js') }}"></script>

        <script src="{{ asset('quitelight/common/scripts.js') }}"></script>

        <!--Additional Page includes-->
        <script>
            function categoryNews(data){
                axios.get('{{url("daftar-artikel")}}/'+data).then((res) => {
                    window.location.href = '{{url("daftar-artikel")}}/'+data;
                });
            }

            function detailNews(data){
                axios.get('{{url("daftar-artikel/detil-artikel")}}/'+data).then((res) => {
                    window.location.href = '{{url("daftar-artikel/detil-artikel")}}/'+data;
                });
            }

            var input = document.getElementById("topSearch");
            input.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    data = $('#topSearch').val();
                    axios.get('{{url("search-articles")}}/'+data).then((res) => {
                        // console.log(res);
                        // return false;

                        window.location.href = '{{url("search-articles")}}/'+data;
                    });
                }
            });
        </script>
        @yield('custom_script')

    </body>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</html>
