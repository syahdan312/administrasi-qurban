@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Qurban</h2>
    <form action="{{ route('qurban.store') }}" method="POST">
        @csrf
        <input type="text" name="nama_peserta" placeholder="Nama" class="form-control mb-2">
        <input type="text" name="telepon" placeholder="Telepon" class="form-control mb-2">
        <textarea name="alamat" placeholder="Alamat" class="form-control mb-2"></textarea>
        <input type="text" name="paket" placeholder="Paket (contoh: Kambing)" class="form-control mb-2">
        <input type="number" name="harga" placeholder="Harga" class="form-control mb-2">
        <input type="text" name="jenis_hewan" placeholder="Jenis Hewan" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection