<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Crud::orderBy('jenis_bisnis', 'desc')->paginate(3);
        return view('crud.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'jenis_bisnis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jenis_layanan' => 'required|string|max:255',
            'no' => 'required|string|max:20',
            'kebutuhan' => 'nullable|string',
        ]);

        // Create a new Crud instance
        Crud::create($validatedData);

        return redirect()->route('crud.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Crud::findOrFail($id);
        return view('crud.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'jenis_bisnis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jenis_layanan' => 'required|string|max:255',
            'no' => 'required|string|max:20',
            'kebutuhan' => 'nullable|string',
        ]);

        // Find the Crud instance and update it
        $crud = Crud::findOrFail($id);
        $crud->update($validatedData);

        return redirect()->route('crud.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();

        return redirect()->route('crud.index')->with('success', 'Data berhasil dihapus');
    }
}
