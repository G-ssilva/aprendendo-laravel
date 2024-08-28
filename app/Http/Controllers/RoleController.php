<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller {

	public function index(): View {
		return view('cadastroRole')->with('roles', Role::all());
	}

	public function cadastrar(Request $request): RedirectResponse {

		$request->validate([
				'nome' => ['required', 'max:255'],
				'descricao' => ['required', 'max:255']
		]);

		Role::create([
				'nome' => $request->get('nome'),
				'descricao' => $request->get('descricao'),
		]);

		return redirect(route('cadastroRole'));
	}

}
