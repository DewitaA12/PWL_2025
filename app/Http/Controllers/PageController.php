<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM 2341720100 <br> Dewita Anggraini';
    }

    public function articles($Id) {
        return 'Halaman artikel dengan ID '.$Id;
    }
}
