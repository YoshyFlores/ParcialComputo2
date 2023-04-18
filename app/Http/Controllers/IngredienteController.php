<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredientes;


class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['ingredientes'] = Ingredientes::All();

        return view('ingrediente.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ingrediente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ingredienteData = request()->except('_token');
        Ingredientes::insert($ingredienteData);

        return redirect()->route('ingrediente.index');

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
        //
        $ingrediente=Ingredientes::findOrFail($id);
        return view('ingrediente.edit', compact('ingrediente'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ingredienteData=request()->except(['_token', '_method']);
        Ingredientes::where('id', '=', $id)->update($ingredienteData);
        return redirect('ingrediente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Ingredientes::destroy($id);
        return redirect('ingrediente');
    }
}


