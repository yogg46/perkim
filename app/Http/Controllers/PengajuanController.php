<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $tittle = 'Pengajuan';
        $slug1 = '';
        return view('pengaju.index', compact('tittle', 'slug1'));
    }
}