<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Snack;
use Illuminate\Database\Seeder;

class SnackSeeder extends Seeder
{
    public function run(): void
    {
        $snacksByBrand = [
            'Doritos' => [
                [
                    'name' => 'Doritos Nacho',
                    'flavor' => 'Nacho Cheese',
                    'price' => 1099,
                    'description' => 'Clássico sabor queijo com tempero marcante.',
                    'image' => null,
                ],
                [
                    'name' => 'Doritos Cool Ranch',
                    'flavor' => 'Cool Ranch',
                    'price' => 1099,
                    'description' => 'Sabor intenso com notas de ervas.',
                    'image' => null,
                ],
            ],
            'Cheetos' => [
                [
                    'name' => 'Cheetos Onda Requeijão',
                    'flavor' => 'Requeijão',
                    'price' => 599,
                    'description' => 'Formato ondulado com sabor de requeijão.',
                    'image' => null,
                ],
                [
                    'name' => 'Cheetos Bolinha',
                    'flavor' => 'Queijo',
                    'price' => 599,
                    'description' => 'O clássico das bolinhas de queijo.',
                    'image' => null,
                ],
            ],
            'Ruffles' => [
                [
                    'name' => 'Ruffles Original',
                    'flavor' => 'Original',
                    'price' => 899,
                    'description' => 'Batatas onduladas com sal na medida.',
                    'image' => null,
                ],
                [
                    'name' => 'Ruffles Cebola e Salsa',
                    'flavor' => 'Cebola e Salsa',
                    'price' => 899,
                    'description' => 'Sabor clássico e equilibrado.',
                    'image' => null,
                ],
            ],
            'Fandangos' => [
                [
                    'name' => 'Fandangos Presunto',
                    'flavor' => 'Presunto',
                    'price' => 499,
                    'description' => 'Tradicional salgadinho de milho sabor presunto.',
                    'image' => null,
                ],
            ],
            'Pringles' => [
                [
                    'name' => 'Pringles Original',
                    'flavor' => 'Original',
                    'price' => 1299,
                    'description' => 'Batatas empilháveis crocantes.',
                    'image' => null,
                ],
                [
                    'name' => 'Pringles Sour Cream & Onion',
                    'flavor' => 'Sour Cream & Onion',
                    'price' => 1299,
                    'description' => 'Sabor cremoso com toque de cebola.',
                    'image' => null,
                ],
            ],
        ];

        foreach ($snacksByBrand as $brandName => $snacks) {
            $brand = Brand::where('name', $brandName)->first();

            if (! $brand) {
                continue;
            }

            foreach ($snacks as $snack) {
                Snack::firstOrCreate(
                    [
                        'name' => $snack['name'],
                        'brand_id' => $brand->id,
                    ],
                    [
                        'description' => $snack['description'],
                        'flavor' => $snack['flavor'],
                        'price' => $snack['price'],
                        'image' => $snack['image'],
                    ]
                );
            }
        }
    }
}
