<?php

namespace App\Http\Controllers;

use App\Models\Tbl_mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tbl_mahasiswaController extends Controller
{
   public function datamhs()
    {
        // mengambil data dari table mahasiswa
        $Tbl_mahasiswa = DB::table('Tbl_mahasiswa')->get();
 
        // mengirim data mahasiswa ke view index
        return view('datamhs',['Tbl_mahasiswa' => $Tbl_mahasiswa]);
 
    }

    // method untuk menampilkan view form tambah data
    public function input()
    {
 
    // memanggil view tambah
    return view('input');
 
    }

        // method untuk insert data ke table mahasiswa
    public function proses(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('Tbl_mahasiswa')->insert([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman data mahasiswa
        return redirect('/');
     
    }

       // method untuk edit data mahasiswa
    public function edit($nrp)
    {
        // mengambil data mahasiswa berdasarkan nrp yang dipilih
        $Tbl_mahasiswa = DB::table('Tbl_mahasiswa')->where('nrp',$nrp)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('edit',['Tbl_mahasiswa' => $Tbl_mahasiswa]);
     
        } 

        // update data mahasiswa
    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('Tbl_mahasiswa')->where('nrp',$request->nrp)->update([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman data mahasiswa
        return redirect('/data');
    }
       // method untuk hapus data mahasiswa
    public function hapus($nrp)
    {
        // menghapus data mahasiswa berdasarkan nrp yang dipilih
        DB::table('Tbl_mahasiswa')->where('nrp',$nrp)->delete();
            
        // alihkan halaman ke halaman data mahasiswa
        return redirect('/data');
    } 
}
