<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Pengembalian extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Pengembalian',
            'subjudul'    => 'Tampilan Data pengembalian'
        ];
        return view('v_pengembalian', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Halaman Tambah Pengembalian',
            'subjudul'    => 'Tampilan Tambah Pengembalian'
        ];
        return view('v_tmbhpengembalian', $data);
    }

    public function Insert()
    {
        Request()->validate([
            'judul_buku'=> 'required',
            'nama_pinjaman'=> 'required',
            'tanggal_peminjaman'=> 'required',
            'no_hp'=> 'required',
       ], [
            'judul_buku.required' => 'Kode Buku Wajib di Isi !!',
            'nama_pinjaman' => 'Kode Buku Ini Sudah Ada !!',
            'tanggal_peminjaman.required' => ' Wajib di Isi !!',
            'no_hp.required' => ' Wajib di Isi !!',
            
       ]);

       $data = [
        'judul_buku' => Request()->judul_buku,
        'nama_pinjaman' => Request()->nama_pinjaman,
        'tanggal_peminjaman' => Request()->tanggal_peminjaman,
        'no_hp' => Request()->no_hp,
    
       ];
       $this->ModelBuku->addData($data);
       return redirect()->to('/Pengembalian')->with('pesan', 'Data Berhasil Ditambah !!!');
    }
}