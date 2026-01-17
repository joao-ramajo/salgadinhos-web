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
                    'image' => 'https://americanas.vtexassets.com/arquivos/ids/438342/7490812460_1SZ.jpg?v=638844843821500000',
                ],
                [
                    'name' => 'Doritos Cool Ranch',
                    'flavor' => 'Cool Ranch',
                    'price' => 1099,
                    'description' => 'Sabor intenso com notas de ervas.',
                    'image' => 'https://www.doritos.com/sites/doritos.com/files//2024-06/new-nacho-cool-ranch%202024.png',
                ],
            ],
            'Cheetos' => [
                [
                    'name' => 'Cheetos Onda Requeijão',
                    'flavor' => 'Requeijão',
                    'price' => 599,
                    'description' => 'Formato ondulado com sabor de requeijão.',
                    'image' => 'https://remembrstore.com/cdn/shop/files/remembr-default-title-cheetos-onda-requeijao-elma-chips-160g-39104314212643.jpg?v=1766081384',
                ],
                [
                    'name' => 'Cheetos Bolinha',
                    'flavor' => 'Queijo',
                    'price' => 599,
                    'description' => 'O clássico das bolinhas de queijo.',
                    'image' => 'https://m.media-amazon.com/images/I/61PrUciOQDL._AC_UF894,1000_QL80_.jpg',
                ],
            ],
            'Ruffles' => [
                [
                    'name' => 'Ruffles Original',
                    'flavor' => 'Original',
                    'price' => 899,
                    'description' => 'Batatas onduladas com sal na medida.',
                    'image' => 'https://milium.vtexassets.com/arquivos/ids/295219/Salgadinho-Ruffles-Original-Elma-Chips-68g-147850.jpg?v=638524978278200000',
                ],
                [
                    'name' => 'Ruffles Cebola e Salsa',
                    'flavor' => 'Cebola e Salsa',
                    'price' => 899,
                    'description' => 'Sabor clássico e equilibrado.',
                    'image' => 'https://docemalu.vtexassets.com/arquivos/ids/5367435/faba239f6fc2d4b7587868207b574a8ba1dcc272.jpg?v=639021224936900000',
                ],
            ],
            'Fandangos' => [
                [
                    'name' => 'Fandangos Presunto',
                    'flavor' => 'Presunto',
                    'price' => 499,
                    'description' => 'Tradicional salgadinho de milho sabor presunto.',
                    'image' => 'https://m.media-amazon.com/images/I/51JWrDC1jFL._AC_UF1000,1000_QL80_.jpg',
                ],
            ],
            'Pringles' => [
                [
                    'name' => 'Pringles Original',
                    'flavor' => 'Original',
                    'price' => 1299,
                    'description' => 'Batatas empilháveis crocantes.',
                    'image' => 'https://m.media-amazon.com/images/I/511A7gqNwgL._AC_UF894,1000_QL80_.jpg',
                ],
                [
                    'name' => 'Pringles Sour Cream & Onion',
                    'flavor' => 'Sour Cream & Onion',
                    'price' => 1299,
                    'description' => 'Sabor cremoso com toque de cebola.',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyCX2CypB2oVJh5bkmYZk6aSnge2rivqWeXQ&s',
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
