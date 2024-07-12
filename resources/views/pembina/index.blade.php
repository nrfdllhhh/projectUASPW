@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Pembina</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pembina</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pembina</h3>
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
                    <a href="{{ route('pembina.create') }}" class="btn btn-success">Tambah Pembina</a>
                    <h1 class="my-4">Pembina List</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pembina as $pembina)
                                <tr>
                                    <td>{{ $pembina->id }}</td>
                                    <td>{{ $pembina->nama }}</td>
                                    <td>{{ $pembina->gender }}</td>
                                    <td>{{ $pembina->tgl_lahir }}</td>
                                    <td>{{ $pembina->tmp_lahir }}</td>
                                    <td>{{ $pembina->keahlian }}</td>
                                    <td>
                                        <a href="{{ route('pembina.show', $pembina->id) }}" class="btn btn-info">Detail</a>
                                        <a href="{{ route('pembina.edit', $pembina->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('pembina.destroy', $pembina->id) }}" method="POST" style="display:inline-block;">
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
