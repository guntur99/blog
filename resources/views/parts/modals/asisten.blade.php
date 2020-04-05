<!---Modal-->
    <div class="modal fade" id="asistenModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title">Detil Informasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div> --}}
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <!--card begins-->
                        <div class=" bg-dark ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-8 m-auto text-white p-t-40 p-b-90">

                                        <h1 class="fw-300 text-center">Anda butuh bantuan?
                                        </h1>
                                        <p class="p-t-30 p-b-30 form-dark">
                                            <input type="search" placeholder="Masukkan kata kunci" class=" form-control form-control-lg">
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="container pull-up">
                            <div class="row m-b-70">
                                <div class="col-lg-4 col-md-6">
                                    <a href="#" id="guide_penduduk_desa" class="card shadow-lg guide-item m-b-10  bg-primary">
                                        <div class="card-body text-white">

                                            <h3 class=" p-t-20 "><strong>Seputar Kependudukan</strong></h3>
                                            <p>
                                                Klik untuk mulai!
                                            </p>

                                        </div>
                                        <div class="text-center">
                                            <img class="card-img" src="{{ asset('atmos/getting started/light/assets/img/guides/random-01.svg') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a href="#" id="guide_berita_desa" class="card shadow-lg guide-item m-b-10  bg-success">
                                        <div class="card-body text-white">

                                            <h3 class=" p-t-20 "><strong>Seputar Berita Desa</strong></h3>
                                            <p>
                                                Klik untuk mulai!
                                            </p>

                                        </div>
                                        <div class="text-center">
                                            <img class="card-img" src="{{ asset('atmos/getting started/light/assets/img/guides/random-02.svg') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6">

                                    <a href="#" id="guide_pemerintah_desa" class="card shadow-lg guide-item m-b-10  bg-info">
                                        <div class="card-body text-white">

                                            <h3 class=" p-t-20 "><strong>Seputar Pemerintahan</strong></h3>
                                            <p>
                                                Klik untuk mulai!
                                            </p>

                                        </div>
                                        <div class="text-center">
                                            <img class="card-img" src="{{ asset('atmos/getting started/light/assets/img/guides/random-05.svg') }}" alt="">
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
