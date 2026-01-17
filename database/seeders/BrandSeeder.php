<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Elma Chips',
                'description' => 'Marca líder de salgadinhos no Brasil, pertencente à PepsiCo.',
            ],
            [
                'name' => 'Doritos',
                'description' => 'Salgadinhos de tortilla conhecidos pelo sabor intenso.',
            ],
            [
                'name' => 'Cheetos',
                'description' => 'Salgadinhos de milho com sabores marcantes e formatos divertidos.',
            ],
            [
                'name' => 'Fandangos',
                'description' => 'Salgadinhos tradicionais à base de milho.',
            ],
            [
                'name' => 'Ruffles',
                'description' => 'Batatas onduladas famosas pela crocância.',
            ],
            [
                'name' => 'Pringles',
                'description' => 'Batatas empilháveis em lata com diversos sabores.',
            ],
            [
                'name' => 'Yokitos',
                'description' => 'Salgadinhos de milho populares pelo custo-benefício.',
            ],
            [
                'name' => 'Torcida',
                'description' => 'Salgadinhos com sabores inspirados em petiscos de boteco.',
            ],
            [
                'name' => 'Pingo D’Ouro',
                'description' => 'Marca clássica de salgadinhos e amendoins.',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::firstOrCreate(
                ['name' => $brand['name']],
                ['description' => $brand['description']]
            );
        }
    }
}
