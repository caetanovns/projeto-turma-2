<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurante.index', [
            'restaurantes' => Restaurante::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $restaurante = new Restaurante();
        $restaurante->nome_fantasia = $request->nome_fantasia;
        $restaurante->razao_social = $request->razao_social;
        $restaurante->endereco = $request->endereco;
        $restaurante->telefone = $request->telefone;
        $restaurante->gerente = $request->gerente;
        $restaurante->is_aberto = $request->is_aberto;

        $restaurante->save();

        //Restaurante::create($request->all());

        return redirect()->route('restaurantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurante $restaurante)
    {
        return view('restaurante.show', [
            'restaurante' => $restaurante
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurante $restaurante)
    {

        $restaurante->nome_fantasia = $request->nome_fantasia;
        $restaurante->razao_social = $request->razao_social;
        $restaurante->endereco = $request->endereco;
        $restaurante->telefone = $request->telefone;
        $restaurante->gerente = $request->gerente;
        $restaurante->is_aberto = $request->is_aberto;
        $restaurante->save();
        
        return redirect()->route('restaurantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurante $restaurante)
    {
        $restaurante->delete();
        return redirect()->route('restaurantes.index');
    }
}
