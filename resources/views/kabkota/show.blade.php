@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Kabupaten/Kota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Kabupaten/Kota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $kabkota->nama }}</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $kabkota->nama }}</td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <td>{{ $kabkota->latitude }}</td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td>{{ $kabkota->longitude }}</td>
                        </tr>
                        <tr>
                            <th>Provinsi ID</th>
                            <td>{{ $kabkota->provinsi_id }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <a href="{{ route('kabkota.index') }}" class="btn btn-default">Kembali</a>
        </section>
    </div>
</div>

@include('admin.footer')