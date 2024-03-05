<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class CholloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chollos = Chollo::all();
        return view('index', compact('chollos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chollos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required',
        'descripcion' => 'required',
        'categoria' => 'required',
        'puntuacion' => 'required|integer',
        'precio' => 'required|numeric',
        'precio_descuento' => 'required|numeric',
        'url' => 'required|url',
    ]);

    Chollo::create($request->all());

    return redirect()->route('chollos.index')->with('success', 'Chollo creado correctamente.');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chollo  $chollo
     * @return \Illuminate\Http\Response
     */
    public function show(Chollo $chollo)
    {
        return view('chollos.show', compact('chollo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chollo  $chollo
     * @return \Illuminate\Http\Response
     */
    public function edit(Chollo $chollo)
    {
        return view('chollos.edit', compact('chollo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chollo  $chollo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chollo $chollo)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'url' => 'required|url',
        ]);

        $chollo->update($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chollo  $chollo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chollo $chollo)
    {
        $chollo->delete();

        return redirect()->route('chollos.index')->with('success', 'Chollo eliminado correctamente.');
    }
}
