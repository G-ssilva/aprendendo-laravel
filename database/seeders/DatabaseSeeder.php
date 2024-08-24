<?php

namespace Database\Seeders;

use App\Models\Apartamento;
use App\Models\ApartamentoMorador;
use App\Models\Condominio;
use App\Models\CondominioSindico;
use App\Models\Morador;
use App\Models\Role;
use App\Models\Sindico;
use App\Models\SindicoAtivo;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		Apartamento::factory(1)->create();
		Condominio::factory(1)->create();
		CondominioSindico::factory(1)->create();
		Morador::factory(1)->create();
		Role::factory(1)->create();
		Sindico::factory(1)->create();
		Usuario::factory(1)->create();
		ApartamentoMorador::factory(1)->create();
	}
}
