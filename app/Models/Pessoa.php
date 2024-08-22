<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pessoa extends Model {
    use HasFactory, Notifiable;

    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'cpf',
    ];
}
