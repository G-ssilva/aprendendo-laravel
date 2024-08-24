<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Condominio extends Model {
	use HasFactory;

	protected $table = 'condominios';

	protected $fillable = [
			'nome',
			'cep',
	];

	public function sindicos(): belongsToMany {
		return $this->belongsToMany(Sindico::class, 'condominio_sindico');
	}

	public function sindico(): belongsTo {
		return $this->belongsTo(Sindico::class, 'sindico_id');
	}
}
