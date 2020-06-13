<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Website Pemerintahan Desa Waringin, Majalengka. Desa Waringin adalah salah satu desa yang terdapat di Kecamatan Palasah Kabupaten Majalengka Provinsi Jawa Barat.">
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

    </head>
    <body>

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
                axios.get('{{url("daftar-berita")}}/'+data).then((res) => {
                    window.location.href = '{{url("daftar-berita")}}/'+data;
                });
            }

            function detailNews(data){
                axios.get('{{url("daftar-berita/detil-berita")}}/'+data).then((res) => {
                    window.location.href = '{{url("daftar-berita/detil-berita")}}/'+data;
                });
            }

            $('#search_articles').click((e) => {
                data = $('#topSearch').val();
                axios.get('{{url("search-articles")}}/'+data).then((res) => {
                    // console.log(res);
                    // return false;

                    window.location.href = '{{url("search-articles")}}/'+data;
                });
            })
        </script>
        @yield('custom_script')

    </body>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</html>
