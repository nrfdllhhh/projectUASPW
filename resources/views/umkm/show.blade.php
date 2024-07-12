@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Umkm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $umkm->nama }}</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $umkm->nama }}</td>
                        </tr>
                        <tr>
                            <th>Modal</th>
                            <td>{{ $umkm->modal }}</td>
                        </tr>
                        <tr>
                            <th>Pemilik</th>
                            <td>{{ $umkm->pemilik }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $umkm->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td>{{ $umkm->website }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $umkm->email }}</td>
                        </tr>
                        <tr>
                            <th>Kabupaten/Kota</th>
                            <td>{{ $umkm->kabkota->nama }}</td>
                        </tr>
                        <tr>
                            <th>Rating</th>
                            <td>{{ $umkm->rating }}</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>{{ $umkm->kategoriUmkm->nama }}</td>
                        </tr>
                        <tr>
                            <th>Pembina</th>
                            <td>{{ $umkm->pembina->nama }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <a href="{{ route('umkm.index') }}" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
