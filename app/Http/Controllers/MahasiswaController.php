<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function edit()
    {
        return view('update');
    }
}
