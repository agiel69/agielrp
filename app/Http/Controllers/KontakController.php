<?php

namespace App\Http\Controllers;

use App\Models\telfon;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = telfon::all();
        return view('admin.kontak.index', compact('kontaks'));
    }

    public function create()
    {
        return view('admin.kontak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'status_publis' => 'required|in:0,1'
        ]);

        telfon::create($request->all());
        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kontak = telfon::findOrFail($id);
        return view('admin.kontak.edit', compact('kontak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'status_publis' => 'required|in:0,1'
        ]);

        $kontak = telfon::findOrFail($id);
        $kontak->update($request->all());
        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kontak = telfon::findOrFail($id);
        $kontak->delete();
        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil dihapus');
    }
}

