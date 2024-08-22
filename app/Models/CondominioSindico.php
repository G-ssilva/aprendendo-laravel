<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CondominioSindico extends Model {

    use HasFactory;

    public $timestamps = false;
    protected $table = 'condominio_sindico';

    public function condominios (): belongsToMany {
        return $this->belongsToMany(Condominio::class, 'condominio_sindico');
    }

    public function sindicos (): belongsToMany {
        return $this->belongsToMany(Sindico::class, 'condominio_sindico');
    }

}
