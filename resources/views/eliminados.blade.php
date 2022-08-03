@extends("layouts.app")

		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--start email wrapper-->
                    <div class="email-wrapper my-5">
                        <div class="email-sidebar">
                            <div class="email-sidebar-header d-grid"> <a href="javascript:;" class="btn btn-primary compose-mail-btn"><i class='bx bx-plus me-2'></i> Escribir mensaje </a>
                            </div>
                            <div class="email-sidebar-content">
                                <div class="email-navigation">
                                        <a href="{{ url('bandeja') }}" class="list-group-item d-flex align-items-center"><i class='bx bxs-inbox me-3 font-20'></i><span>Bandeja</span><span class="badge bg-primary rounded-pill ms-auto">3</span></a>
                                        <div class="list-group list-group-flush"> <a href="{{ url('enviados') }}" class="list-group-item d-flex align-items-center"><i class='bx bxs-send me-3 font-20'></i><span>Enviados</span></a>
                                            <a href="{{ url('eliminados') }}" class="list-group-item active d-flex align-items-center"><i class='bx bxs-trash-alt me-3 font-20'></i><span>Eliminados</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="email-header d-xl-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="email-toggle-btn"><i class='bx bx-menu'></i>
                                </div>
                                <div class="btn btn-white">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-white ms-2"><i class='bx bx-refresh me-0'></i>
                                    </button>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-white ms-2"><i class='bx bx-downvote me-0'></i>
                                    </button>
                                </div>
                                <div class="d-none d-md-flex">
                                    <button type="button" class="btn btn-white ms-2"><i class='bx bx-file me-0'></i>
                                    </button>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-white ms-2"><i class='bx bx-trash me-0'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-grow-1 mx-xl-2 my-2 my-xl-0">
                                <div class="input-group">	<span class="input-group-text bg-transparent"><i class="bx bx-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Buscar mensaje">
                                </div>
                            </div>
                            <div class="ms-auto d-flex align-items-center">
                                <button class="btn btn-sm btn-light">1-50 of 8,740</button>
                                <button class="btn btn-white px-2 ms-2"><i class='bx bx-chevron-left me-0'></i>
                                </button>
                                <button class="btn btn-white px-2 ms-2"><i class='bx bx-chevron-right me-0'></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="email-content">
                            <div class="">
                                <div class="email-list">
                                    <a href="{{ url('app-emailread') }}">
                                        <div class="d-md-flex align-items-center email-message px-3 py-1">
                                            <div class="d-flex align-items-center email-actions">
                                                <input class="form-check-input" type="checkbox" value="" /> <i class='bx bx-star font-20 mx-2 email-star'></i>
                                                <p class="mb-0"><b>Wordpress</b>
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="mb-0">It is a long established fact that a reader will be distracted by the readable...</p>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="mb-0 email-time">5:56 PM</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('app-emailread') }}">
                                        <div class="d-md-flex align-items-center email-message px-3 py-1">
                                            <div class="d-flex align-items-center email-actions">
                                                <input class="form-check-input" type="checkbox" value="" /> <i class='bx bx-star font-20 mx-2 email-star'></i>
                                                <p class="mb-0"><b>Locanto</b>
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal...</p>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="mb-0 email-time">5:45 PM</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('app-emailread') }}">
                                        <div class="d-md-flex align-items-center email-message px-3 py-1 bg-body">
                                            <div class="d-flex align-items-center email-actions">
                                                <input class="form-check-input" type="checkbox" value="" /> <i class='bx bx-star font-20 mx-2 email-star'></i>
                                                <p class="mb-0"><b>Facebook</b>
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="mb-0">There are many variations of passages of Lorem Ipsum available, majority suffered...</p>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="mb-0 email-time">4:32 PM</p>
                                            </div>
                                        </div>
                                    </a>
                     
                                </div>
                            </div>
                        </div>
                        <!--start compose mail-->
                        <div class="compose-mail-popup">
                            <div class="card">
                                <div class="card-header bg-dark text-white py-2 cursor-pointer">
                                    <div class="d-flex align-items-center">
                                        <div class="compose-mail-title">Redactar mensaje</div>
                                        <div class="compose-mail-close ms-auto">x</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="email-form">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Para" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Asunto" />
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" placeholder="Mensaje" rows="10" cols="10"></textarea>
                                        </div>
                                        <div class="mb-0">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary">Enviar</button>
                                                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" style="background-color: rgb(133 32 57);border-color: rgb(133 32 57);">	<span class="visually-hidden">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">	<a class="dropdown-item" href="javascript:;">Acción 1</a>
                                                            <a class="dropdown-item" href="javascript:;">Acción 2</a>
                                                            <a class="dropdown-item" href="javascript:;">Acción 3</a>
                                                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Acción 4</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ms-2">
                                                    <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-text-format"></i>
                                                    </button>
                                                    <button type="button" class="btn border-0 btn-sm btn-white"><i class='bx bx-link-alt'></i>
                                                    </button>
                                                    <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-emoji-tounge"></i>
                                                    </button>
                                                    <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-google-drive"></i>
                                                    </button>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end compose mail-->
                        <!--start email overlay-->
                        <div class="overlay email-toggle-btn-mobile"></div>
                        <!--end email overlay-->
                    </div>
                    <!--end email wrapper-->
                </div>
            </div>
		@endsection

@section("script")
<script>
	new PerfectScrollbar('.email-navigation');
	new PerfectScrollbar('.email-list');
</script>
@endsection
