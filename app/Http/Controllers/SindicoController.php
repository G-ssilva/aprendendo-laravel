<?php

namespace App\Http\Controllers;

use App\Models\Sindico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SindicoController {

	public function index (): View {
		return view('cadastroSindico')->with('sindicos', Sindico::all());
	}

	public function cadastrar (Request $request): RedirectResponse {

		$request->validate([
				'nome' => ['required', 'max:255'],
				'cpf' => ['required', 'unique:sindicos', 'digits:11'],
				'salario' => ['required', 'numeric'],
		]);

		Sindico::create([
				'nome' => $request->get('nome'),
				'cpf' => $request->get('cpf'),
				'salario' => $request->get('salario'),
		]);

		return redirect(route('cadastroSindico'));
	}

}
