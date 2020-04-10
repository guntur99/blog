<!---Modal-->
    <div class="modal fade" id="allMenuBeritaModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Silahkan Pilih Ingin Melakukan Apa!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body " style="background-color:#f2f2f2">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">

                                <!--widget card begin-->
                                <div class="card m-b-30 m-t-10">
                                    <div class="card bg-dark pointer_card">

                                        <div class="card-body text-white">
                                            <div class="text-center p-b-0">
                                                <a href="#" class="badge    text-uppercase bg-white-translucent">Bagian Berita Desa</a>
                                                <div class="p-t-20 p-b-20">

                                                </div>
                                                <h3 class="font-primary fw-300  ">Tambah Berita Baru</h3>
                                                <p class="opacity-75"><a href="#">Klik disini!</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->

                                <!--widget card begin-->
                                <div class="card m-b-30">
                                    <div class="card bg-primary pointer_card">

                                        <div class="card-body text-white">
                                            <div class="text-center p-b-0">
                                                <a href="#" class="badge    text-uppercase bg-white-translucent">Bagian Kategori</a>
                                                <div class="p-t-20 p-b-20">

                                                </div>
                                                <h3 class="font-primary fw-300  ">Tambah Kategori Baru</h3>
                                                <p class="opacity-75"><a href="#">Klik disini!</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->

                                <!--widget card begin-->
                                <div class="card m-b-30">
                                    <div class="card bg-success pointer_card" id="form_tambah_tag">

                                        <div class="card-body text-white">
                                            <div class="text-center p-b-0">
                                                <a href="#" class="badge    text-uppercase bg-white-translucent">Bagian Tag Berita</a>
                                                <div class="p-t-20 p-b-20">

                                                </div>
                                                <h3 class="font-primary fw-300  ">Tambah Tag Baru</h3>
                                                <p class="opacity-75"><a href="#">Klik disini!</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->

                            </div>
                            <div class="col-lg-4 col-md-4">

                                <!--widget card begin-->
                                <div class="card m-b-15 m-t-10" style="margin-left:-17px;">
                                    <div class="card-body pointer_card">
                                        <div class="row">
                                            <div class="col-md-12 my-auto">
                                                <div class="media">
                                                    <div class="avatar mr-3">
                                                        <div class="avatar-title rounded-circle bg-dark"><i
                                                                    class="mdi mdi-newspaper"></i></div>
                                                    </div>
                                                    <div class="media-body p-t-10">
                                                        <h5 class="m-b-0">Perbarui Berita</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->

                                <!--widget card begin-->
                                <div class="card m-b-0" style="margin-left:-17px;">
                                    <div class="card-body pointer_card">
                                        <div class="row">
                                            <div class="col-md-12 my-auto">
                                                <div class="media">
                                                    <div class="avatar mr-3">
                                                        <div class="avatar-title rounded-circle bg-dark"><i
                                                                    class="mdi mdi-file-remove"></i></div>
                                                    </div>
                                                    <div class="media-body p-t-10">
                                                        <h5 class="m-b-0">Hapus Berita</h5>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->


                                <!--widget card begin-->
                                <div class="card m-b-15 m-t-35" style="margin-left:-17px;">
                                    <div class="card-body pointer_card">
                                        <div class="row">
                                            <div class="col-md-12 my-auto">
                                                <div class="media">
                                                    <div class="avatar mr-3">
                                                        <div class="avatar-title rounded-circle bg-primary"><i
                                                                    class="mdi mdi-newspaper"></i></div>
                                                    </div>
                                                    <div class="media-body p-t-10">
                                                        <h5 class="m-b-0">Perbarui Kategori</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->

                                <!--widget card begin-->
                                <div class="card m-b-0" style="margin-left:-17px;">
                                    <div class="card-body pointer_card">
                                        <div class="row">
                                            <div class="col-md-12 my-auto">
                                                <div class="media">
                                                    <div class="avatar mr-3">
                                                        <div class="avatar-title rounded-circle bg-primary"><i
                                                                    class="mdi mdi-file-remove"></i></div>
                                                    </div>
                                                    <div class="media-body p-t-10">
                                                        <h5 class="m-b-0">Hapus Kategori</h5>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->


                                <!--widget card begin-->
                                <div class="card m-b-15 m-t-35" style="margin-left:-17px;">
                                    <div class="card-body pointer_card" id="form_perbarui_tag">
                                        <div class="row">
                                            <div class="col-md-12 my-auto">
                                                <div class="media">
                                                    <div class="avatar mr-3">
                                                        <div class="avatar-title rounded-circle bg-success"><i
                                                                    class="mdi mdi-newspaper"></i></div>
                                                    </div>
                                                    <div class="media-body p-t-10">
                                                        <h5 class="m-b-0">Perbarui Tag</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->

                                <!--widget card begin-->
                                <div class="card m-b-0" style="margin-left:-17px;">
                                    <div class="card-body pointer_card" id="form_hapus_tag">
                                        <div class="row">
                                            <div class="col-md-12 my-auto">
                                                <div class="media">
                                                    <div class="avatar mr-3">
                                                        <div class="avatar-title rounded-circle bg-success"><i
                                                                    class="mdi mdi-file-remove"></i></div>
                                                    </div>
                                                    <div class="media-body p-t-10">
                                                        <h5 class="m-b-0">Hapus Tag</h5>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--widget card ends-->

                            </div>

                        </div>


                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
