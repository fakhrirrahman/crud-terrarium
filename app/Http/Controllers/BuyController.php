<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buy;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buy = Buy::get();
        return view('buy.index',compact('buy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'produk' => 'required',
            'jumlah' => 'required',
            'foto' => 'required|image',
        ]);
    
        $input = $request->all();
    
        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto_bukti/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
    
        Buy::create($input);
    
        return redirect()->route('dashboard.beli')->with('success', 'Terima kasih sudah membeli dan tunggu konfirmasi dari kami');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buy = Buy::findOrFail($id);
        return view('buy.show', compact('buy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buy = Buy::findOrFail($id);

        return view('buy.edit',compact('buy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'produk' => 'required',
            'jumlah' => 'required',
            'foto' => 'required|image',
        ]);

        $buy = Buy::findOrFail($id);
    
        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');
    
        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto_bukti/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            // if ($buy->foto) {
            //     unlink(public_path($destinationPath . $buy->foto));
            // }
            $input['foto'] = $imageName;
        }
    
        // Update data buy
        $buy->update($input);
    
        return redirect()->route('buy.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buy = Buy::findOrFail($id);
        $buy->delete();
        return redirect()->route('buy.index')->with('success', ' deleted successfully');
    }
}
