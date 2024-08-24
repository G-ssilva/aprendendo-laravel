<?php

namespace Database\Factories;

use App\Models\Condominio;
use App\Models\Sindico;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CondominioFactory extends Factory {

	protected $model = Condominio::class;

	public function definition(): array {
		$faker = FakerFactory::create('pt_BR');

		return [
				'nome' => $faker->company,
				'cep' => str_replace('-', '', $faker->unique()->postcode),
				'sindico_id' => Sindico::factory(),
				'created_at' => now(),
				'updated_at' => now(),
		];
	}
}
