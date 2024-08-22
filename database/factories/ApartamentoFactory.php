<?php

namespace Database\Factories;

use App\Models\Apartamento;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartamentoFactory extends Factory {

    protected $model = Apartamento::class;

    public function definition (): array {
        $faker = FakerFactory::create('pt_BR');

        return [
            'bloco' => $faker->unique()->regexify('[A-Z]{2}'), // Gera um bloco com uma letra única
            'numero' => $faker->unique()->regexify('[1-9][0-9]{0,2}'), // Gera um número de apartamento único
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
