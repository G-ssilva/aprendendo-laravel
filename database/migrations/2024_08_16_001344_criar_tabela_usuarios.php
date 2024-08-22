<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up (): void {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('senha');
            $table->foreignIdFor(Role::class, 'role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    public function down (): void {
        Schema::dropIfExists('usuarios');
    }
};
