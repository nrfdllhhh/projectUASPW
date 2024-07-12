@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Umkm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Umkm</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $umkm->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="modal">Modal</label>
                            <input type="text" class="form-control" id="modal" name="modal" value="{{ $umkm->modal }}" required>
                        </div>
                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <input type="text" class="form-control" id="pemilik" name="pemilik" value="{{ $umkm->pemilik }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $umkm->alamat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website" value="{{ $umkm->website }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $umkm->email }}">
                        </div>
                        <div class="form-group">
                            <label for="kabkota_id">Kabupaten/Kota</label>
                            <select class="form-control" id="kabkota_id" name="kabkota_id" required>
                                @foreach($kabkotas as $kabkota)
                                    <option value="{{ $kabkota->id }}" {{ $umkm->kabkota_id == $kabkota->id ? 'selected' : '' }}>{{ $kabkota->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="{{ $umkm->rating }}">
                        </div>
                        <div class="form-group">
                            <label for="kategori_umkm_id">Kategori UMKM</label>
                            <select class="form-control" id="kategori_umkm_id" name="kategori_umkm_id" required>
                                @foreach($kategori_umkms as $kategori_umkm)
                                    <option value="{{ $kategori_umkm->id }}" {{ $umkm->kategori_umkm_id == $kategori_umkm->id ? 'selected' : '' }}>{{ $kategori_umkm->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pembina_id">Pembina</label>
                            <select class="form-control" id="pembina_id" name="pembina_id">
                                <option value="">Tidak Ada</option>
                                @foreach($pembinas as $pembina)
                                    <option value="{{ $pembina->id }}" {{ $umkm->pembina_id == $pembina->id ? 'selected' : '' }}>{{ $pembina->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
