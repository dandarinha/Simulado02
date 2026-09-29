<?php

namespace Database\Seeders;

use App\Models\Produto;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Produto::create([
            'produto' => 'cimento',
            'unid_medida' => '50 kG',
            'preco' => '35.00',
            'qtd_estoque' => '10',
            'qtd_minima' => '5',
            'data_val' => '2027-01-01',
            'aplicacao' => 'fixação de blocos'
        ]);
    }
}
