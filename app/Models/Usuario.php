<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable {
	use HasFactory, Notifiable;

	protected $table = 'usuarios';

	protected $fillable = [
			'login',
			'senha',
			'role_id',
			'ativo'
	];

	protected $hidden = [
			'senha',
	];

	public function role(): belongsTo {
		return $this->belongsTo(Role::class, 'role_id');
	}

	protected function casts(): array {
		return [
				'senha' => 'hashed',
		];
	}

	public function getAuthPassword(): string {
		return $this->senha;
	}
}
