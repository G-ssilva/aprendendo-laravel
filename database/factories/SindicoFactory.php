<?php

namespace Database\Factories;

use App\Models\Sindico;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SindicoFactory extends Factory {

    protected $model = Sindico::class;

    public function definition (): array {
        $faker = FakerFactory::create('pt_BR');
        return [
            'nome' => $faker->name,
            'cpf' => $faker->unique()->cpf,
            'salario' => $faker->randomFloat(2, 2000, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
