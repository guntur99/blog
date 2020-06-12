<div class="mb-50">
    <h5 class="mb-30"><b>Creatif Sangat</b></h5>

    @foreach($cretive_articles as $article)
    <div class="sided-80x mb-20">
        <div class="s-left">
            <img src="{{ $article->image }}" style="height: 80px; object-fit: cover;" alt="">
        </div><!-- s-left -->
        <div class="s-right">
            <h5 class="pt-5"><a href="#"><b>{{ $article->judul }}</b></a></h5>
        </div><!-- s-left -->
    </div><!-- sided-80x -->
    @endforeach

</div><!-- mb-50 -->
