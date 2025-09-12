<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['nome' => 'Em aprovação'],
            ['nome' => 'Em preparação'],
            ['nome' => 'Pronto para retirada'],
            ['nome' => 'Entregue'],
            ['nome' => 'Cancelado'],
        ];

        foreach ($status as $s) {
            \App\Models\StatusPedido::updateOrCreate($s);
        }
    }
}
