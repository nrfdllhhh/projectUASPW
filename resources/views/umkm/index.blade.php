@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar UMKM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">UMKM</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">UMKM List</h3>
                    <div class="card-tools">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                @if(Auth::user()->role == 'admin')
                    <a href="{{ route('umkm.create') }}" class="btn btn-success">Tambah Umkm</a>
                    <h1 class="my-4">Daftar Umkm</h1>
                    @endif
                    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pemilik</th>
                        <th>Modal</th>
                        <th>Alamat</th>
                        <th>Website</th>
                        <th>Email</th>
                        <th>Kabupaten/Kota</th>
                        <th>Rating</th>
                        <th>Kategori</th>
                        <th>Pembina</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($umkms as $umkm)
                        <tr>
                            <td>{{ $umkm->nama }}</td>
                            <td>{{ $umkm->pemilik }}</td>
                            <td>{{ $umkm->modal }}</td>
                            <td>{{ $umkm->alamat }}</td>
                            <td>{{ $umkm->website }}</td>
                            <td>{{ $umkm->email }}</td>
                            <td>{{ $umkm->kabkota->nama }}</td>
                            <td>{{ $umkm->rating }}</td>
                            <td>{{ $umkm->kategoriUmkm->nama }}</td>
                            <td>{{ $umkm->pembina->nama }}</td>
                            <td>
                                <a href="{{ route('umkm.show', $umkm->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
