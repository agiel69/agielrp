<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMatakuliah extends Controller
{
    public function index()
    {
        //mengambil data dari tabel matakuliah
        $matakuliah = DB::table('tblmatakuliah')->get();
        //mengirim data ke view matakuliah
        return view('matakuliah', ['matakuliah' => $matakuliah]);
    }

    public function tambahData()
{
    return view('addmatkul'); // Pastikan menggunakan view yang benar
}


    public function simpan(Request $request)
    {
        // Validasi data sebelum disimpan
        $validatedData = $request->validate([
            'txtid' => 'required|numeric',
            'txtkdmatakuliah' => 'required',
            'txtmatakuliah' => 'required',
        ]);

        // Simpan data ke tabel matakuliah
        DB::table('tblmatakuliah')->insert([
            'id' => $validatedData['txtid'],
            'kdmatakuliah' => $validatedData['txtkdmatakuliah'],
            'matakuliah' => $validatedData['txtmatakuliah'],
        ]);
        return redirect('/matakuliah')->with('status', 'Data berhasil disimpan!');
    }

    public function edit($id)
{
    $matakuliah = DB::table('tblmatakuliah')->where('id', $id)->first();

    if (!$matakuliah) {
        return redirect('/matakuliah')->with('error', 'Data tidak ditemukan');
    }

    return view('matakuliah.edit', compact('matakuliah'));
}

    public function update(Request $request)
{
    $validatedData = $request->validate([
        'txtid' => 'required|numeric',
        'txtkdmatakuliah' => 'required',
        'txtmatakuliah' => 'required',
    ]);

    DB::table('tblmatakuliah')->where('id', $request->txtid)->update([
        'kdmatakuliah' => $validatedData['txtkdmatakuliah'],
        'matakuliah' => $validatedData['txtmatakuliah'],
    ]);

    return redirect('/matakuliah')->with('status', 'Data berhasil diupdate!');
}


public function hapus($id)
{
    $matakuliah = DB::table('tblmatakuliah')->where('id', $id)->first();
    if ($matakuliah) {
        DB::table('tblmatakuliah')->where('id', $id)->delete();
        return redirect('/matakuliah')->with('status', 'Data berhasil dihapus!');
    }
    return redirect('/matakuliah')->with('error', 'Data tidak ditemukan!');
}


}