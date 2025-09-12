<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtoCategorias = [
            [ 'nome' => 'Prato do dia'],
            [ 'nome' => 'Bebidas' ],
            [ 'nome' => 'Entradas' ],
            [ 'nome' => 'Sobremesas' ],
            [ 'nome' => 'Acompanhamentos' ],
            [ 'nome' => 'Fit' ],
            [ 'nome' => 'Lanches' ],
            [ 'nome' => 'Massas' ],
            [ 'nome' => 'Pizzas' ],
            [ 'nome' => 'Sopas' ],
            [ 'nome' => 'Salgados' ],
            [ 'nome' => 'Cafés' ],
            [ 'nome' => 'Comidas Rápidas' ],
        ];

        foreach ($produtoCategorias as $categoria) {
            \App\Models\ProdutoCategoria::updateOrCreate($categoria);
        }
    }
}
