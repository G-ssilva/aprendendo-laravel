<?php

namespace App\Http\Controllers;

use App\Models\Morador;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MoradorController extends Controller {

	public function index(): View {
		return view('cadastroMorador')->with('moradores', Morador::all());
	}

	public function cadastrar(Request $request): RedirectResponse {

		$request->validate([
				'nome' => ['required', 'max:255'],
				'cpf' => ['required', 'unique:moradores', 'digits:11'],
		]);

		Morador::create([
				'nome' => $request->get('nome'),
				'cpf' => $request->get('cpf'),
		]);

		return redirect(route('cadastroMorador'));
	}

}
