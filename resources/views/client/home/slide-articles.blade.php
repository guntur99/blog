<!-- ##### Hero Area Start ##### -->
<div class="hero-area owl-carousel">

    {{-- @foreach($categories_khs as $category) --}}
        @foreach($slide_articles as $post)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url('{{ $post->image }}'); object-fit: cover;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{ Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</a>
                                <a href="#">{{ $post->category_name }}</a>
                            </div>
                            <a href="#!" class="post-title mx-5" data-animation="fadeInUp" data-delay="300ms">{{ $post->judul }}</a>
                            {{--<a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    {{-- @endforeach --}}

</div>
<!-- ##### Hero Area End ##### -->
