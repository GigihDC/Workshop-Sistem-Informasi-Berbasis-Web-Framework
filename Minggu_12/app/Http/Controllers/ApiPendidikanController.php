<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class ApiPendidikanController extends Controller
{
    public function index()
    {
        //Memanggil semua data pada tabel pendidikan
        $pendidikan = Pendidikan::all();
        return response()->json($pendidikan);
    }

    public function show($id)
    {
        //Memanggil data berdasarkan id
        $pendidikan = Pendidikan::find($id);
        if (!$pendidikan) {
            return response()->json([
                //Apabila id tidak ditemukan akan muncul message berikut
                'message' => 'Pendidikan not found'
            ], 404);
        }
        return response()->json($pendidikan);
    }

    public function store(Request $request)
    {
        //Menambahkan data baru pada tabel pendidikan
        Pendidikan::create($request->all());
        return response()->json([
            //Apabila berhasil menambahkan data muncul message berikut
            'status' => "ok",
            'message' => 'Pendidikan berhasil ditambahkan',
        ], 201);
    }

    public function update(Request $request, $id)
    {   
        //Mengupdate data yang berada pada id yang dimasukkan
        $pendidikan = Pendidikan::find($id);
        $pendidikan->update($request->all());
        if (!$pendidikan) {
            return response()->json([
                //Apabila id tidak ditemukan akan muncul message berikut
                'message' => 'Pendidikan not found'
            ], 404);
        }
        return response()->json([
            //Apabila berhasil untuk mengubah data akan muncul message berikut
            'status' => "ok",
            'message' => 'Pendidikan berhasil diubah',
        ], 201);
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);
        if (!$pendidikan) {
            return response()->json([
                'message' => 'Pendidikan not found'
            ], 404);
        }
        $pendidikan->delete();
        return response()->json([
            'status' => "ok",
            'message' => 'Pendidikan berhasil dihapus',
        ], 201);
    }
}
