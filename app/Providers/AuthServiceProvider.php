<?php

namespace App\Providers;

use App\Models\Usuario;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider {

	protected $policies = [
	];

	public function boot(): void {
		Gate::define('isAdmin', function (Usuario $usuario) {
			return $usuario->role->nome == env('ROLE_ADMIN');
		});

		Gate::define('isSindico', function (Usuario $usuario) {
			return $usuario->role->nome == env('ROLE_SINDICO');
		});
	}
}
