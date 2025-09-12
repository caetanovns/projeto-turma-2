<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\RestauranteFactory;
use App\Models\Restaurante;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        $this->call([
            ProdutoCategoriaSeeder::class,
            StatusPedidoSeeder::class,
        ]);
        */
        Restaurante::factory(30)->create();
    }
}
