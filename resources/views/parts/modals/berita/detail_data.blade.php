<!---Modal-->
    <div class="modal fade" id="beritaModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title">Location (<span id="location_name_modal_title"></span>) - Facility (<span id="facility_name_modal_title"></span>) - Client (<span id="client_name_modal_title"></span>)</h5> --}}
                        <h5 class="modal-title" id="kategori"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Single post-->
                        <div class=" m-b-10">
                            <div class="card-header pt-3">
                                <div class="media">
                                    <div class="avatar mr-3 my-auto  avatar-xs " id="avatar_cover">
                                        <img src="{{ asset('atmos/getting started/light/assets/img/users/user-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body m-auto">
                                        <h5 class="m-0" id="judul"> </h5>
                                        <div class="opacity-75 text-muted" id="created_at"></div>
                                    </div>
                                </div>

                                {{-- <div class="col-md-2 card-controls pt-1">
                                    <a href="#!" class="text-warning">
                                        <i class="mdi mdi-font-awesome"></i>
                                    </a>
                                    <div class="dropdown">
                                        <p class=" text-warning" style="font-weight:800" id="kategori">  </p>

                                    </div>
                                </div> --}}
                            </div>
                            <div class="card-body">
                                <div class="p-b-10 text-center" id="image_cover">
                                    <img class="rounded" id="image" src="" alt="">
                                </div>
                                <br>
                                <p id="desc_singkat"></p>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="opacity-75" id="tags_berita"></div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center">
                                    </div>

                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row col-md-12 w-100 m-b-30">
                            <div class="col-md-4">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-xs">
                                            <img src="{{ asset('atmos/getting started/light/assets/img/users/user-2.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <strong><p id="created_by" class="ml-1" style="margin-top:1px;"></p></strong>
                                    </div>
                            </div>
                            <div class="col-md-8" id="button-modal" style="padding:2px 2px">
                            </div>
                        </div>
                        <!--card begins-->
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
