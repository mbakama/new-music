@extends('admin.layout.template')


@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">team</a></li>
                                    <li class="breadcrumb-item active">Artiste List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Artistes List</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-2 offset-md-10 mb-2">
                        <!-- Signup modal-->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#signup-modal">Ajouter un artiste</button>
                        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div class="text-center mt-2 mb-4">
                                            <a href="index.html" class="text-success">
                                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt=""
                                                        height="18"></span>
                                            </a>
                                        </div>

                                        <form action="/add-artiste" method="POST" class="ps-3 pe-3" id="myForm">
                                            @csrf

                                            @method('POST')
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Prenom</label>
                                                <input class="form-control @error('firstname') is-invalid @enderror"
                                                    type="text" name="firstname" id="firstname"
                                                    placeholder="Michael Zenaty"><br>


                                                @error('firstname')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Nom</label>
                                                <input class="form-control" type="text" name="username" id="username"
                                                    placeholder="Michael Zenaty"><br>
                                                    @error('username')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email</label>
                                                <input class="form-control" type="email" name="emailaddress"
                                                    id="emailaddress" placeholder="john@deo.com">
                                            </div>

                                            <div class="mb-3">
                                                <select name="genre" id="" class="form-select">
                                                    <option value="">Selectionner le genre</option>
                                                    <option value="femme">Femme</option>
                                                    <option value="homme">Homme</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <select name="role" id="" class="form-select">
                                                    <option value="">Selectionner le fonction</option>
                                                    <option value="musician">Musicien</option>
                                                    <option value="chanteur.se">Chanteur</option>
                                                </select>
                                            </div>


                                            <div class="mb-3 text-center">
                                                <button class="btn btn-primary"  data-bs-dismiss="modal" type="submit">Add artiste</button>
                                            </div>
                                           

                                        </form>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                    </div>
                </div>
                <div class="row">

                    @foreach ($users as $user)
                        <div class="col-md-6 col-xxl-3">



                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">View Profile</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Project Info</a>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <img src="{{ asset('storage/' . $user->photo) }}"
                                            class="rounded-circle avatar-md img-thumbnail" alt="friend">
                                        <h4 class="mt-3 my-1"><a href="pages-profile-2.html"
                                                class="text-reset">{{ $user->prenom }} {{ $user->name }} <i
                                                    class="mdi mdi-check-decagram text-success"></i></a></h4>
                                        <p class="mb-0 text-muted"><i
                                                class="mdi mdi-email-outline me-1"></i>{{ $user->email }}</p>
                                        <hr class="bg-dark-lighten my-3">

                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <a href="javascript:void(0);" class="btn w-100 btn-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i
                                                        class="mdi mdi-message-processing-outline"></i></a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);" class="btn w-100 btn-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Call"><i
                                                        class="mdi mdi-phone"></i></a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);" class="btn w-100 btn-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Email"><i
                                                        class="mdi mdi-email-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End col -->
                    @endforeach

                </div> <!-- End row -->

                <div class="row py-4">
                    <div class="col-12 text-center">
                        <i class="mdi mdi-dots-circle mdi-spin font-24 text-muted"></i>
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- content -->

        <!-- Footer Start -->
        @include('admin.layout.footer')
        <!-- end Footer -->

    </div>
@endsection
