<?php

namespace Database\Factories;

use App\Models\Apartamento;
use App\Models\Morador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartamentoMoradorFactory extends Factory {

    public function definition (): array {
        return [
            'apartamento_id' => Apartamento::factory(),
            'morador_id' => Morador::factory(),
        ];
    }
}
