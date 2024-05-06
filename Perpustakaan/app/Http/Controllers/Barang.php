<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Barang extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Data Barang',
            'subjudul'    => 'Tampilan Data Barang'
        ];
        return view('master/v_barang', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Halaman Tambah Buku',
            'subjudul'    => 'Tampilan Tambah Buku'
        ];
        return view('master/v_tambah_barang', $data);
    }

    public function Edit()
    {
        $data = [
            'judul' => 'Halaman Edit Buku',
            'subjudul'    => 'Tampilan Edit Buku'
        ];
        return view('master/v_edit_barang', $data);
    }
}