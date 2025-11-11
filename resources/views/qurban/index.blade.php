@extends('layouts.app') {{-- kalau kamu pakai layout, kalau tidak hapus baris ini --}}

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Data Peserta Qurban</h2>

    {{-- Tombol tambah data --}}
    <a href="{{ route('qurban.create') }}" class="btn btn-primary mb-3">+ Tambah Peserta</a>

    {{-- Tampilkan pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tabel data qurban --}}
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Paket</th>
                <th>Harga</th>
                <th>Jenis Hewan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_peserta }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->paket }}</td>
                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->jenis_hewan }}</td>
                    <td>
                        {{-- Tombol Edit --}}
                        <a href="{{ route('qurban.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        {{-- Tombol Hapus --}}
                        <form action="{{ route('qurban.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Belum ada data qurban</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
