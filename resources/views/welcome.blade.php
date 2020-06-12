@extends('layouts.app')

@section('content')

    <!-- ********** New Area Start ********** -->
    @include('client.home.hot-news')
    <!-- ********** New Area End ********** -->

    <section class="bg-1-white ptb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-md-12 col-lg-8 pt-50 pb-50 pr-30 pr-md-15">

                    @include('client.home.fast-news')

                    @include('client.home.popular-news')

                    @include('client.home.high-tech-news')

                    @include('client.home.future-tech-news')

                </div><!-- col-sm-9 -->

                @include('client.home.side-menu')

            </div><!-- row -->
        </div><!-- container -->
    </section>

    {{-- <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">
    <!-- ********** Latest Area Start ********** -->
    @include('client.home.pengumuman-articles')
    <!-- ********** Latest Area End ********** -->

    <!-- ********** Latest Area Start ********** -->
    @include('client.home.news-articles')
    <!-- ********** Latest Area End ********** -->

    <!-- ********** Latest Area Start ********** -->
    @include('client.home.fixed-articles')
    <!-- ********** Latest Area End ********** -->
    </section> --}}

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
