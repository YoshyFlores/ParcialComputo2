<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //agregamos funcionalidad para el index
        $data['recetas']= Receta::All();
        return view('receta.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('receta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          //recepcionar todos los datos
          $recetaData = request()->except('_token');
          Receta::insert($recetaData);
          return redirect()->route('receta.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //No se agregaba nada
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //recuperar los datos
        $receta=Receta::findOrFail($id);
        return view('receta.edit', compact('receta'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $recetaData=request()->except(['_token', '_method']);
        Receta::where('id', '=', $id)->update($recetaData);
        return redirect('receta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Receta::destroy($id);
        return redirect('receta');
        
    }
}
