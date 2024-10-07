<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Kantor;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::with('kantor')->get();
        return view('pegawais.index', compact('pegawais'));
    }

    public function create()
    {
        $kantors = Kantor::all();
        return view('pegawais.create', compact('kantors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'kantor_id' => 'required',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawais.index');
    }

    public function edit(Pegawai $pegawai)
    {
        $kantors = Kantor::all();
        return view('pegawais.edit', compact('pegawai', 'kantors'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'kantor_id' => 'required',
        ]);

        $pegawai->update($request->all());
        return redirect()->route('pegawais.index');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawais.index');
    }
}