@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Provinsi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Provinsi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $provinsi->nama }}</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $provinsi->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $provinsi->nama }}</td>
                        </tr>
                        <tr>
                            <th>Ibukota</th>
                            <td>{{ $provinsi->ibukota }}</td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <td>{{ $provinsi->latitude }}</td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td>{{ $provinsi->longitude }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('provinsi.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Provinsi</a>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
