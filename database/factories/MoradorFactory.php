<?php

namespace Database\Factories;

use App\Models\Morador;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class MoradorFactory extends Factory {

    protected $model = Morador::class;

    public function definition (): array {
        $faker = FakerFactory::create('pt_BR');

        return [
            'nome' => $faker->name,
            'cpf' => $faker->unique()->cpf(false),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
