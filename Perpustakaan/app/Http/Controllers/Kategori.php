<?php

namespace App\Http\Controllers;
use App\Models\ModelKategori;

use Illuminate\Routing\Controller as BaseController;

class Kategori extends BaseController
{
    protected $ModelKategori;
    //Pemanggilan Models
    public function __construct()
    {
 
        // untuk memanggil semua function pada class ModelKategori
        $this->ModelKategori = new ModelKategori();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Kategori',
            'subjudul'    => 'Tampilan Data Kategori',
            'kategori' => $this->ModelKategori->allData()
        ];
        return view('master/v_kategori', $data);
    }
    public function Tambah()
    {
        $data = [
            'judul' => 'Halaman Tambah Kategori',
            'subjudul'    => 'Tampilan Tambah Kategori'
        ];
        return view('master/v_tmbhkategori', $data);
    }
    public function Insert()
    {
        Request()->validate([
            'kategori'=> 'required|unique:tbl_kategori,kategori',
            
       ], [
            'kategori.required' => 'Kode Buku Wajib di Isi !!',
            'kategori.unique' => 'Kode Buku Ini Sudah Ada !!',
       ]);

       $data = [
        'kategori' => Request()->kategori,
       ];
       $this->ModelKategori->addData($data);
       return redirect()->to('/Kategori')->with('pesan', 'Data Berhasil Ditambah !!!');
    }

}