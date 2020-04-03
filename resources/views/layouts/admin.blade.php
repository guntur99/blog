@include('layouts.header')

@include('parts.sidebar')

<main class="admin-main">
@include('parts.header')

    @yield('content')
</main>

@include('layouts.footer')
