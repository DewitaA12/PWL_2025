<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return 'Selamat Datang <br> Pada Mata Kuliah Pemrograman Web Lanjut 2025';
    }
}
