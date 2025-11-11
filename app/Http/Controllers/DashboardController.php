<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qurban;

class DashboardController extends Controller
{
    // Tampilkan data qurban
    public function index()
    {
        $data = Qurban::all();
        return view('dashboard', compact('data'));
    }

    // Hapus data peserta
    public function destroy($id)
    {
        $qurban = Qurban::findOrFail($id);
        $qurban->delete();

        return redirect()->route('dashboard')->with('success', 'Data peserta qurban berhasil dihapus!');
    }
}
