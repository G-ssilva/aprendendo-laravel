<?php

namespace Database\Factories;

use App\Models\Role;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory {

    protected $model = Role::class;

    public function definition (): array {
        $faker = FakerFactory::create('pt_BR');

        return [
            'nome' => $faker->unique()->jobTitle, // Gera um título de cargo único
            'descricao' => $faker->sentence, // Gera uma descrição aleatória
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
