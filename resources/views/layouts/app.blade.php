<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Website Pemerintahan Desa Waringin, Majalengka. Desa Waringin adalah salah satu desa yang terdapat di Kecamatan Palasah Kabupaten Majalengka Provinsi Jawa Barat.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Desa Waringin - Website Desa Waringin</title>

        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('mapp/img/logo.png') }}">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset('mapp/style.css') }}">

    </head>
    <body>

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
        <!-- jQuery-2.2.4 js -->
        <script src="{{ asset('mapp/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('mapp/js/bootstrap/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('mapp/js/bootstrap/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script src="{{ asset('mapp/js/plugins/plugins.js') }}"></script>
        <!-- Active js -->
        <script src="{{ asset('mapp/js/active.js') }}"></script>

        <!--Additional Page includes-->
        <script>
            function categoryBerita(data){
                axios.get('{{url("daftar-berita")}}/'+data).then((res) => {
                    window.location.href = '{{url("daftar-berita")}}/'+data;
                });
            }
        </script>
        @yield('custom_script')

    </body>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</html>
