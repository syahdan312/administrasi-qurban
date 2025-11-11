<?php

namespace App\Http\Controllers;

use App\Models\Qurban;
use Illuminate\Http\Request;

class QurbanController extends Controller
{
    // Menampilkan semua data qurban
    public function index()
    {
    $data = Qurban::all();
    return view('dashboard', compact('data')); // BUKAN layouts.app
    }

    // Menampilkan form tambah qurban
    public function create($jenis = null)
    {
        return view('qurban.create', compact('jenis'));
    }

    public function show($jenis)
{
    $data = [
        'kambing' => ['harga' => 3000000, 'deskripsi' => 'Cocok untuk 1 orang. Bobot sekitar 25–35 kg.'],
        'sapi'    => ['harga' => 21000000, 'deskripsi' => 'Cocok untuk 7 orang. Bobot 200–300 kg.'],
        'domba'   => ['harga' => 2800000, 'deskripsi' => 'Cocok untuk 1 orang. Bobot 25–30 kg.'],
        'unta'    => ['harga' => 40000000, 'deskripsi' => 'Cocok untuk 7–10 orang. Bobot besar.'],
    ];

    if (!array_key_exists($jenis, $data)) {
        abort(404);
    }

    return view('qurban.detail', [
        'jenis' => ucfirst($jenis),
        'harga' => $data[$jenis]['harga'],
        'deskripsi' => $data[$jenis]['deskripsi'],
        'gambar' => "images/$jenis.jpg",
    ]);
}


    // Menyimpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'paket' => 'required|string',
            'harga' => 'required|numeric',
            'jenis_hewan' => 'required|string',
        ]);

        Qurban::create($validated);

        return redirect()->route('qurban.index')->with('success', 'Pendaftaran qurban berhasil!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $data = Qurban::findOrFail($id);
        return view('qurban.edit', compact('data'));
    }

    // Menghapus data
    public function destroy($id)
    {
        $data = Qurban::findOrFail($id);
        $data->delete();

        return redirect()->route('qurban.index')->with('success', 'Data berhasil dihapus!');
    }
}
