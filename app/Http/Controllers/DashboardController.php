<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMahasiswa = 5;
        $totalAktif = 3;
        $totalCuti = 1;

        return view('dashboard', compact(
            'totalMahasiswa',
            'totalAktif',
            'totalCuti'
        ));
    }
}