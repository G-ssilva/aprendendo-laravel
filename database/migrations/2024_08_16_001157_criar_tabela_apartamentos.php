<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up (): void {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->id();
            $table->string('bloco');
            $table->string('numero');
            $table->unique(['bloco', 'numero']);
            $table->timestamps();
        });
    }

    public function down (): void {
        Schema::dropIfExists('apartamentos');
    }
};
