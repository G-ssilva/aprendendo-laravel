<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Condominio extends Model {
    use HasFactory;

    protected $table = 'condominios';

    protected $fillable = [
        'nome',
        'cep',
    ];

    public function sindicos (): belongsToMany {
        return $this->belongsToMany(Sindico::class, 'condominio_sindico');
    }

    public function sindicoAtivo (): hasOne {
        return $this->hasOne(SindicoAtivo::class, 'condominio_id');
    }
}
