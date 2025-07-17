<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/header')
             . view('home')
             . view('templates/footer');
    }

    public function tentang()
    {
        return view('templates/header')
             . view('tentang')
             . view('templates/footer');
    }

    public function tipeRumah()
    {
        return view('templates/header')
             . view('tipe-rumah')
             . view('templates/footer');
    }

    public function galeri()
    {
        return view('templates/header')
             . view('galeri')
             . view('templates/footer');
    }

    public function lokasi()
    {
        return view('templates/header')
             . view('lokasi')
             . view('templates/footer');
    }

    public function kontak()
    {
        return view('templates/header')
             . view('kontak')
             . view('templates/footer');
    }
}