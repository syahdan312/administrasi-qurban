<?php

namespace App\Http\Controllers;

use App\Models\Qurban;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function index()
    {
        $peserta = Peserta::all(); // atau model lain yang kamu pakai
        return view('qurban.index', compact('peserta'));
    }

}
