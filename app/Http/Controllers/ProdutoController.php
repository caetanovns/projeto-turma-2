<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produtos.index', [
            'produtos' => Produto::with(['categoria', 'restaurante'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create', [
            'categorias' => \App\Models\ProdutoCategoria::all(),
            'restaurantes' => \App\Models\Restaurante::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'produto_categorias_id' => 'required|exists:produto_categorias,id',
            'restaurante_id' => 'required|exists:restaurantes,id',
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.index');
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
        return view('produtos.edit', [
            'produto' => Produto::findOrFail($id),
            'categorias' => \App\Models\ProdutoCategoria::all(),
            'restaurantes' => \App\Models\Restaurante::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'produto_categorias_id' => 'required|exists:produto_categorias,id',
            'restaurante_id' => 'required|exists:restaurantes,id',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index');
    }
}
