<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::all();
        $tittle = 'Pengajuan';
        $slug1 = '';
        return view('pengaju.index', compact('tittle', 'slug1', 'pengajuan'));
    }
}