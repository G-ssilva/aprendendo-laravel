<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApartamentoMorador extends Model {

    use HasFactory;

    public $timestamps = false;
    protected $table = 'apartamento_morador';

    public function apartamentos (): hasMany {
        return $this->hasMany(Apartamento::class, 'morador_id');
    }

    public function moradores (): hasMany {
        return $this->hasMany(Morador::class, 'apartamento_id');
    }

}
