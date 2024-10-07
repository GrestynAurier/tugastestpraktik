<?php

namespace App\Http\Controllers;

use App\Models\Kantor;
use Illuminate\Http\Request;

class KantorController extends Controller
{
    public function index()
    {
        $kantors = Kantor::all();
        return view('kantors.index', compact('kantors'));
    }

    public function create()
    {
        return view('kantors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Kantor::create($request->all());
        return redirect()->route('kantors.index');
    }

    public function edit(Kantor $kantor)
    {
        return view('kantors.edit', compact('kantor'));
    }
    
    public function update(Request $request, Kantor $kantor)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
    
        $kantor->update($request->all());
    
        return redirect()->route('pegawais.index')->with('success', 'Kantor berhasil ditambahkan.');
    }
    

    public function destroy(Kantor $kantor)
    {
        $kantor->delete();
        return redirect()->route('kantors.index')->with('success', 'Kantor berhasil dihapus');
    }
    
}
