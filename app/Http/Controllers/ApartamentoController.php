<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApartamentoController {

	public function index(): View {
		return view('apartamento')
				->with('apartamentos', Apartamento::all())
				->with('paginaAtual', 'apartamento');
	}

	public function cadastrar(Request $request): RedirectResponse {

		$request->validate([
				'bloco' => ['required', 'max:255'],
				'numero' => ['required', 'max:255',
						function ($attribute, $value, $fail) use ($request) {
							$exists = Apartamento::query()
									->where('bloco', $request->get('bloco'))
									->where('numero', $value)
									->exists();

							if ($exists) {
								$fail('A combinação de bloco e número já existe.');
							}
						},
				]
		]);

		Apartamento::create([
				'bloco' => $request->get('bloco'),
				'numero' => $request->get('numero'),
		]);

		return redirect(route('apartamento'));
	}

}
