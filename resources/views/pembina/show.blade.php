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
                    <h3 class="card-title">{{ $pembina->nama }}</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $pembina->nama }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $pembina->gender }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $pembina->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>{{ $pembina->tmp_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Keahlian</th>
                            <td>{{ $pembina->keahlian }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <a href="{{ route('pembina.index') }}" class="btn btn-default">Kembali</a>
        </section>
    </div>
</div>

@include('admin.footer')