<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SindicoAtivo extends Model {
    use HasFactory;

    public $timestamps = false;
    protected $table = 'sindico_ativo';

    public function sindicoAtivo (): HasOne {
        return $this->hasOne(SindicoAtivo::class, 'condominio_id');
    }

    public function condominioAtivo (): HasOne {
        return $this->hasOne(SindicoAtivo::class, 'sindico_id');
    }
}
