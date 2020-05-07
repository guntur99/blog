<!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
<div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Pengumuman</h5>
        </div>

    {{-- @foreach($categories_kh3 as $category)
        @foreach($category->artikels_kh()->orderBy('created_at', 'desc')->take(4)->get() as $post) --}}
        <!-- Single Blog Post -->
        <div class="single-blog-post d-flex">
            <div class="post-thumbnail">
                <a href="#!">
                    <img src="" style="width: 70px; height: 70px; object-fit: cover;" alt="">
                </a>
            </div>
            <div class="post-content">
                <a href="#!" class="post-title"></a>
                <div class="post-meta d-flex justify-content-between">
                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
        {{-- @endforeach
    @endforeach --}}

    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget">
        <a href="#!" class="add-img"><img src="{{ asset('mapp/img/bg-img/cek-kependudukan-add.jpg') }}" alt=""></a>
    </div>

</div>
