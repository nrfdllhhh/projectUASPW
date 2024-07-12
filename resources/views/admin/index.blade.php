@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profil</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container my-5">
                        <div class="row d-flex align-items-stretch">
                            <!-- Profil 1 -->
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/pathi.jpg') }}" class="card-img-top img-fluid" alt="Profil 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Pathi</h5>
                                        <p class="card-text">NIM: 0110223068</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Profil 2 -->
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('/assets/img/kebot.jpg') }}" class="card-img-top img-fluid" alt="Profil 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Nur Fadilah</h5>
                                        <p class="card-text">NIM: 0110223075</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Profil 3 -->
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('/assets/img/sania.jpg') }}" class="card-img-top img-fluid" alt="Profil 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Sania Sahwananti</h5>
                                        <p class="card-text">NIM: 0110223055</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Profil 4 -->
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/heathcliff.jpg') }}" class="card-img-top img-fluid" alt="Profil 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Aditya Febriadi</h5>
                                        <p class="card-text">NIM: 0110223074</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

<link rel="stylesheet" href="{{ asset('assets/plugins/style.css') }}">

@include('admin.footer')
