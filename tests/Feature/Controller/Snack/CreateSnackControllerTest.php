<?php

use App\Models\Brand;

beforeEach(function () {
    Brand::factory()->create();
});

test('cria um novo registro de salgadinho com sucesso', function () {
    $response = $this->postJson(route('create.snacks'), [
        'name' => 'Doritos',
        'flavor' => 'Queijo Nacho',
        'price' => 1200,
        'brand_id' => 1,
    ]);

    $response->assertStatus(201);
});
