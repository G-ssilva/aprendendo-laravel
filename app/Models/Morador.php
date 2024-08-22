<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Morador extends Pessoa {
    use HasFactory;

    protected $table = 'moradores';

    protected $fillable = [
        'nome',
        'cpf'
    ];

    public function apartamentos (): belongsToMany {
        return $this->belongsToMany(Apartamento::class, 'apartamento_morador');
    }

}
