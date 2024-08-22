<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sindico extends Pessoa {
    use HasFactory;

    protected $table = 'sindicos';

    protected $fillable = [
        'nome', 'cpf', 'salario',
    ];

    public function condominios (): belongsToMany {
        return $this->belongsToMany(Condominio::class, 'condominio_sindico');
    }

    public function condominioAtivo (): hasOne {
        return $this->hasOne(SindicoAtivo::class, 'sindico_id');
    }

}
