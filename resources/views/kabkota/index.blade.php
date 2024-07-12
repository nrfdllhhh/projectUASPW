@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Kabupaten/Kota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kabupaten/Kota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Kabupaten/Kota</h3>
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
                        <a href="{{ route('kabkota.create') }}" class="btn btn-success">Tambah Kabupaten/Kota</a>
                        <h1 class="my-4">Kabupaten/Kota List</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kabkota as $kabkota)
                                <tr>
                                    <td>{{ $kabkota->id }}</td>
                                    <td>{{ $kabkota->nama }}</td>
                                    <td>{{ $kabkota->latitude }}</td>
                                    <td>{{ $kabkota->longitude }}</td>
                                    <td>{{ $kabkota->provinsi->nama }}</td>
                                    <td>
                                        <a href="{{ route('kabkota.show', $kabkota->id) }}" class="btn btn-info">Detail</a>
                                        <a href="{{ route('kabkota.edit', $kabkota->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('kabkota.destroy', $kabkota->id) }}" method="POST" style="display:inline-block;">
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
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
