<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Berita',
        ];

        return view('pages.beranda', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Berita Detail',
        ];

        return view('pages.berita-detail', $data);
    }
}
