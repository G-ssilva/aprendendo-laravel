<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Morador;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApartamentoMoradorController {

	public function index(): View {
		return view('vinculoApartamentoMorador')
				->with('apartamentos', Apartamento::all())
				->with('moradores', Morador::all());
	}

	public function vincular(Request $request): RedirectResponse {
		$request->validate([
				'apartamento' => ['required', 'exists:apartamentos,id'],
				'moradores' => ['required', 'exists:moradores,id'],
		]);

		$apartamento = Apartamento::find($request->get('apartamento'));
		$apartamento->moradores()->sync($request->get('moradores'));

		$apartamento->save();

		return redirect(route('vinculoApartamentoMorador'));
	}

}
