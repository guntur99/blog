@extends('layouts.app')

@section('content')

    <!-- ********** New Area Start ********** -->
    @include('client.home.slide-articles')
    <!-- ********** New Area End ********** -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">
    <!-- ********** Latest Area Start ********** -->
    @include('client.home.pengumuman-articles')
    <!-- ********** Latest Area End ********** -->

    <!-- ********** Latest Area Start ********** -->
    @include('client.home.news-articles')
    <!-- ********** Latest Area End ********** -->

    {{--<!-- ********** Latest Area Start ********** -->--}}
    @include('client.home.fixed-articles')
    {{--<!-- ********** Latest Area End ********** -->--}}
    </section>

@endsection
@section('custom_script')

    <!--Additional Page includes-->
    <script>

        function detilBerita(data){
            axios.get('{{url("daftar-berita/detil-berita")}}/'+data).then((res) => {
                window.location.href = '{{url("daftar-berita/detil-berita")}}/'+data;
            });
        }

    </script>
@endsection
