<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up (): void {
        Schema::table('moradores', function (Blueprint $table) {
            $table->string('cpf', 11)->change();
        });

        Schema::table('sindicos', function (Blueprint $table) {
            $table->string('cpf', 11)->change();
        });
    }

    public function down (): void {
        Schema::table('moradores', function (Blueprint $table) {
            $table->string('cpf')->change();
        });

        Schema::table('sindicos', function (Blueprint $table) {
            $table->string('cpf')->change();
        });
    }
};
