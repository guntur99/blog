<div class="mb-50">
    <h5 class="mb-30"><b>Creatif Sangat</b></h5>

    @foreach($creative_articles as $articles)
    <div class="sided-80x mb-20">
        <div class="s-left">
            <img src="{{ $articles->image }}" style="height: 80px; object-fit: cover;" alt="">
        </div><!-- s-left -->
        <div class="s-right">
            <h5 class="pt-5"><a href="#!" onclick="detailNews('{{ $articles->slug }}')"><b>{{ $articles->judul }}</b></a></h5>
        </div><!-- s-left -->
    </div><!-- sided-80x -->
    @endforeach

</div><!-- mb-50 -->
