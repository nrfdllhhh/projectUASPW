@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pembina</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Pembina</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Pembina</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pembina.update', $pembina->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pembina->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" value="{{ $pembina->gender }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pembina->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $pembina->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="keahlian">Keahlian</label>
                            <input type="text" class="form-control" id="keahlian" name="keahlian" value="{{ $pembina->keahlian }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')