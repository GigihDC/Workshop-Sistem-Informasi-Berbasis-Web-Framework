<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index (Request $request){
        return $request->segment(2);
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $messages =[
            'required' => ':attribute wajib diisi !!!',
            'min' => ':attribute harus diisi minimal :min karakter!',
            'max' => ':attribute harus diisi maksimal :max karakter!',
            'numeric' => ':attribute harus diisi dengan angka!',
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'alamat' => 'required|alpha',
        ],$messages);

        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
