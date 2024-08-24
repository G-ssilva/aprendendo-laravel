<?php

use App\Models\Sindico;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

	public function up(): void {
		Schema::table('condominios', function (Blueprint $table) {
			$table->foreignIdFor(Sindico::class, 'sindico_id')->nullable()->references('id')->on('sindicos')->cascadeOnDelete();
		});
	}

	public function down(): void {
		Schema::table('condominios', function (Blueprint $table) {
			$table->dropColumn('sindico_id');
		});
	}
};
