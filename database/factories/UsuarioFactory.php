<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory {

    protected $model = Usuario::class;

    public function definition (): array {
        return [
            'login' => fake()->unique()->userName(),
            'senha' => Hash::make('password'),
            'role_id' => Role::factory(),
            'ativo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
