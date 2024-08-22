<?php

namespace Database\Factories;

use App\Models\Condominio;
use App\Models\Sindico;
use Illuminate\Database\Eloquent\Factories\Factory;

class SindicoAtivoFactory extends Factory {

    public function definition (): array {
        return [
            'condominio_id' => Condominio::factory(),
            'sindico_id' => Sindico::factory(),
        ];
    }
}
