<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller {
    public function index()
    {
        // return "Halo in adalah method index, dalam controller ManagementUser.";
        $nama = "Gigih Dwi Cahyo";
        $pelajaran = ["Manajemen Perangkat Lunak", "Pengujian Perangkat Lunak", "Perawatan Perangkat Lunak", "Kewirausahaan", 
    "Literasi Digital", "Workshop Mobile Application Framework", "Workshop Sistem Informasi Web Framework"];
        return view('home', compact('nama', 'pelajaran'));
    }
    public function create(){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(Request $request){
        return "method ini nantinya akan digunakan untuk menampilkan data user yang baru";
    }
    public function show($id){
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit($id){
        return "Method ini nantnya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update(Request $request, $id){
        return "menthod ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }
    public function destroy($id){
        return "Method ini nantinya digunakan untuk menghapus user dengan id=" . $id;
    }
}