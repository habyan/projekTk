<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view ('index');
    }

    public function daftar()
    {
        return view ('form-pendaftaran.pendaftaran');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kegiatanharian()
    {
        return view('kegiatan-harian');
    }

    public function kegiatanbesar()
    {
        return view('kegiatan-besar');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function hubungi()
    {
        return view('hubungi');
    }
    
}
