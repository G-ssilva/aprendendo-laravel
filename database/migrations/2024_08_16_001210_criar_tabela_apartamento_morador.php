<?php

use App\Models\Apartamento;
use App\Models\Morador;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up (): void {
        Schema::create('apartamento_morador', function (Blueprint $table) {
            $table->foreignIdFor(Apartamento::class, 'apartamento_id')->references('id')->on('apartamentos');
            $table->foreignIdFor(Morador::class, 'morador_id')->references('id')->on('moradores');
        });
    }

    public function down (): void {
        Schema::dropIfExists('apartamento_morador');
    }
};
