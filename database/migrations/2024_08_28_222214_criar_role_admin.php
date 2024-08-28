<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

	public function up(): void {
		DB::table('roles')->insert([
				'nome' => 'admin',
				'descricao' => 'Administrador do sistema',
				'created_at' => now(),
				'updated_at' => now(),
		]);
	}

	public function down(): void {
		DB::table('roles')->where('nome', 'admin')->delete();
	}
};