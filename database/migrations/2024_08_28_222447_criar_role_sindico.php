<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

	public function up(): void {
		DB::table('roles')->insert([
				'nome' => 'sindico',
				'descricao' => 'Pode visualizar apenas os dados do condominio em que trabalha',
				'created_at' => now(),
				'updated_at' => now(),
		]);
	}

	public function down(): void {
		DB::table('roles')->where('nome', 'sindico')->delete();
	}
};