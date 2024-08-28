<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsuarioController extends Controller {

	public function index(): View {
		return view('cadastroUsuario')
				->with('usuarios', Usuario::all())
				->with('roles', Role::all());
	}

	public function cadastrar(Request $request): RedirectResponse {
		$request->validate([
				'login' => ['required', 'max:255', 'unique:usuarios,login'],
				'senha' => ['required', 'max:255'],
				'role' => [function ($attribute, $value, $fail) use ($request) {
					$exists = Role::query()
							->where('id', $request->get('role'))
							->exists();

					if (!$exists) {
						$fail('A role não existe no banco de dados.');
					}
				}]
		]);

		Usuario::create([
				'login' => $request->get('login'),
				'senha' => bcrypt($request->get('senha')),
				'role_id' => $request->get('role'),
				'ativo' => true
		]);

		return redirect(route('cadastroUsuario'));
	}

}
