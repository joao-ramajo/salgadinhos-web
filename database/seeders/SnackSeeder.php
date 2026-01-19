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
                [
                    'name' => 'Doritos Sweet Chili',
                    'flavor' => 'Sweet Chili',
                    'price' => 1099,
                    'description' => 'Mistura equilibrada de doce e picante.',
                    'image' => 'https://docemalu.vtexassets.com/arquivos/ids/5367549/00e4fbfd17ad01a0157d66ce081544b4395552bc.jpg?v=639021227018330000',
                ],
                [
                    'name' => 'Doritos Pimenta Mexicana',
                    'flavor' => 'Pimenta Mexicana',
                    'price' => 1099,
                    'description' => 'Sabor picante inspirado na culinária mexicana.',
                    'image' => 'https://http2.mlstatic.com/D_NQ_NP_732047-MLA99827429159_112025-O.webp',
                ],
                [
                    'name' => 'Doritos Dinamita',
                    'flavor' => 'Chili Lime',
                    'price' => 1099,
                    'description' => 'Enrolado e super apimentado com toque cítrico.',
                    'image' => 'https://m.media-amazon.com/images/I/91Fn3x8-uPL._SL1500_.jpg',
                ],
                [
                    'name' => 'Doritos Flamin’ Hot',
                    'flavor' => 'Flamin’ Hot',
                    'price' => 1099,
                    'description' => 'Extremamente apimentado para quem gosta de desafio.',
                    'image' => 'https://deskontao.agilecdn.com.br/30454_1.jpg',
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
                [
                    'name' => 'Cheetos Lua Parmesão',
                    'flavor' => 'Parmesão',
                    'price' => 599,
                    'description' => 'Formato de lua com sabor intenso de parmesão.',
                    'image' => 'https://zaffari.vtexassets.com/arquivos/ids/251760/1115733-00.jpg?v=638566618497230000',
                ],
                [
                    'name' => 'Cheetos Flamin’ Hot',
                    'flavor' => 'Flamin’ Hot',
                    'price' => 599,
                    'description' => 'Cheetos extremamente apimentado.',
                    'image' => 'https://m.media-amazon.com/images/I/71UmNRQQQ6L._SL1500_.jpg',
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
                [
                    'name' => 'Ruffles Churrasco',
                    'flavor' => 'Churrasco',
                    'price' => 899,
                    'description' => 'Sabor defumado inspirado no churrasco brasileiro.',
                    'image' => 'https://carrefourbrfood.vtexassets.com/arquivos/ids/193862296/batata-frita-ondulada-elma-chips-ruffles-sabor-churrasco-115g-1.jpg?v=638877495663770000',
                ],
                [
                    'name' => 'Ruffles Queijo',
                    'flavor' => 'Queijo',
                    'price' => 899,
                    'description' => 'Sabor intenso de queijo.',
                    'image' => 'https://m.media-amazon.com/images/I/61CmSJE2XdL._AC_UF894,1000_QL80_.jpg',
                ],
                [
                    'name' => 'Ruffles Sour Cream & Onion',
                    'flavor' => 'Sour Cream & Onion',
                    'price' => 899,
                    'description' => 'Combinação cremosa com toque de cebola.',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL1UZTaZCdFvbjhKtRB1JO4854HZYIRO3aqw&s',
                ],
                [
                    'name' => 'Ruffles Cheddar e Bacon',
                    'flavor' => 'Cheddar e Bacon',
                    'price' => 899,
                    'description' => 'Sabor marcante de cheddar com bacon.',
                    'image' => 'https://conteudo.imguol.com.br/c/noticias/b4/2021/05/11/pepsico-investe-em-novo-sabor-de-ruffles-cheddar--bacon-1620743183477_v2_1920x1920.png',
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

            if (!$brand) {
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
