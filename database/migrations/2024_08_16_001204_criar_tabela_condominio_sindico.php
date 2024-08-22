<?php

use App\Models\Condominio;
use App\Models\Sindico;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up (): void {
        Schema::create('condominio_sindico', function (Blueprint $table) {
            $table->foreignIdFor(Condominio::class, 'condominio_id')->references('id')->on('condominios');
            $table->foreignIdFor(Sindico::class, 'sindico_id')->references('id')->on('sindicos');
        });
    }

    public function down (): void {
        Schema::dropIfExists('condominio_sindico');
    }
};
