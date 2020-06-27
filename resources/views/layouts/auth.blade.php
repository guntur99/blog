<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>Teknonlogis Login | {{ucwords(str_replace("."," ", str_replace(".index","", \Request::route()->getName())))}}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('atmos/getting started/light/assets/img/logo.png') }}"/>
    <link rel="icon" href="{{ asset('atmos/getting started/light/assets/img/logo.png') }}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/pace/pace.css') }}">
    <script src="{{ asset('atmos/getting started/light/assets/vendor/pace/pace.min.js') }}"></script>
    <!--vendors-->
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/getting started/light/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/getting started/light/assets/vendor/jquery-scrollbar/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/timepicker/bootstrap-timepicker.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/getting started/light/assets/fonts/materialdesignicons/materialdesignicons.min.css') }}">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/getting started/light/assets/fonts/feather/feather-icons.css') }}">
    <!--Bootstrap + atmos Admin CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('atmos/getting started/light/assets/css/atmos.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/getting started/light/assets/css/atmos.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/ui/trumbowyg.min.css') }}">


    <style>
        .swal-title-custom{
            font-size: 1.5rem !important;
        }

        .swal-text-custom{
            font-size: 1rem !important;
        }

        .swal-popup-custom{
            width: 25em !important;
        }

        .swal-input-custom{
            font-size: 1rem !important;
        }

        #logoutLink:hover{
            cursor: pointer;
        }

        .dataTables_processing{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
        }
        .select2-selection__clear{
            margin-right: 10px;
            z-index: 1;
        }
    </style>
    @yield('custom_css')
    <!-- Additional library for page -->
</head>

<body class="jumbo-page">
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
     @yield('content')
</body>
@include('layouts.footer')

