<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('apartamentos', function (Blueprint $table) {
            $table->string('bloco', 10)->change();
			$table->string('numero', 8)->change();
        });
    }

    public function down(): void
    {
        Schema::table('apartamentos', function (Blueprint $table) {
            $table->string('bloco')->change();
			$table->string('numero')->change();
        });
    }
};
