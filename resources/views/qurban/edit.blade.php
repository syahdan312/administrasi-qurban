<div class="container mt-4">
    <h2>Edit Data Qurban</h2>

    <form action="{{ route('qurban.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Peserta</label>
            <input type="text" name="nama_peserta" class="form-control" value="{{ $data->nama_peserta }}">
        </div>

        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $data->telepon }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}">
        </div>

        <div class="mb-3">
            <label>Paket</label>
            <input type="text" name="paket" class="form-control" value="{{ $data->paket }}">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $data->harga }}">
        </div>

        <div class="mb-3">
            <label>Jenis Hewan</label>
            <input type="text" name="jenis_hewan" class="form-control" value="{{ $data->jenis_hewan }}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('qurban.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
