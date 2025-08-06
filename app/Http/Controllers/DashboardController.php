<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $namaAdmin = "Aditya";
        $jumlahSiswa = "1000+";
        $jumlahGuru = "30+";

        return view('dashboard', compact(
            'namaAdmin',
            'jumlahSiswa',
            'jumlahGuru',
        ));
    }
}
