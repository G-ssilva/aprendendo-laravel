<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Apartamento extends Model {
    use HasFactory;

    protected $table = 'apartamentos';

    protected $fillable = [
        'bloco',
        'numero',
    ];

    public function moradores (): belongsToMany {
        return $this->belongsToMany(Morador::class, 'apartamento_morador');
    }
}
