<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;


class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = Pesan::get();

        return view('pesan.index', compact('pesan'));
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
        Pesan::create($request->all());
        return redirect()->route('kontak')->with('success', 'berhasil mengirim pesan');
    }

    public function store1(Request $request)
    {
        Pesan::create($request->all());
        return redirect()->route('welcome')->with('success', 'berhasil mengirim pesan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesan = Pesan::findOrFail($id);

        return view('pesan.edit', compact('pesan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pesan = Pesan::findOrFail($id);

        $pesan->update($request->all());

        return redirect()->route('pesan.index')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();
        return redirect()->route('pesan.index')->with('success', 'deleted successfully');
    }
}
