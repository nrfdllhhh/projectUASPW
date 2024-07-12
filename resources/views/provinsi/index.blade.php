@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Provinsi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Provinsi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Provinsi List</h3>
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
                    <a href="{{ route('provinsi.create') }}" class="btn btn-success">Tambah Provinsi</a>
                    <h1 class="my-4">Daftar Provinsi</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Ibukota</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_provinsi as $provinsi)
                                <tr>
                                    <td>{{ $provinsi->id }}</td>
                                    <td>{{ $provinsi->nama }}</td>
                                    <td>{{ $provinsi->ibukota }}</td>
                                    <td>{{ $provinsi->latitude }}</td>
                                    <td>{{ $provinsi->longitude }}</td>
                                    <td>
                                        <a href="{{ route('provinsi.show', $provinsi->id) }}" class="btn btn-info">Detail</a>
                                        <a href="{{ route('provinsi.edit', $provinsi->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('provinsi.destroy', $provinsi->id) }}" method="POST" style="display:inline-block;">
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
