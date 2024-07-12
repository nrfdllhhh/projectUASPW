@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create UMKM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create UMKM</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create New UMKM</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('umkm.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="modal">Modal</label>
                            <input type="text" class="form-control" id="modal" name="modal" required>
                        </div>
                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <input type="text" class="form-control" id="pemilik" name="pemilik" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="kabkota_id">Kabupaten/Kota</label>
                            <select class="form-control" id="kabkota_id" name="kabkota_id" required>
                                @foreach($kabkotas as $kabkota)
                                    <option value="{{ $kabkota->id }}">{{ $kabkota->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5">
                        </div>
                        <div class="form-group">
                            <label for="kategori_umkm_id">Kategori UMKM</label>
                            <select class="form-control" id="kategori_umkm_id" name="kategori_umkm_id" required>
                                @foreach($kategori_umkms as $kategori_umkm)
                                    <option value="{{ $kategori_umkm->id }}">{{ $kategori_umkm->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pembina_id">Pembina</label>
                            <select class="form-control" id="pembina_id" name="pembina_id">
                                <option value="">Tidak Ada</option>
                                @foreach($pembinas as $pembina)
                                    <option value="{{ $pembina->id }}">{{ $pembina->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
