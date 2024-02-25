<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        $data = [
            'nama' => 'Arya Bagus',
            'nim' => '2241720094'
        ];

        return view('about', $data);
    }

    public function articles($id) {
        return view('articles', ['id' => $id]);
    }
}
