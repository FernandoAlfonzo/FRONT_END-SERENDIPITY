		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        {{-- <div class="breadcrumb-title pe-3">Timeline</div> --}}
                        {{-- <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                                </ol>
                            </nav>
                        </div> --}}
                        {{-- <div class="ms-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Settings</button>
                                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--end breadcrumb-->
                    <div class="">
                        <div class="">
                            <div class="container py-2">
                                <h2 class="font-weight-light text-center text-muted py-3">Timeline Example 1</h2>
                                <!-- timeline item 1 -->
                                <div class="row">
                                    <!-- timeline item 1 left dot -->
                                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                                        <div class="row h-50">
                                            <div class="col">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            <span class="badge rounded-pill bg-light border">&nbsp;</span>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!-- timeline item 1 event content -->
                                    <div class="col py-2">
                                        <div class="card radius-15">
                                            <div class="card-body">
                                                <div class="float-end text-muted">Mon, Jan 9th 2020 7:00 AM</div>
                                                <h4 class="card-title text-muted">Day 1 Orientation</h4>
                                                <p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!--/row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		@endsection



