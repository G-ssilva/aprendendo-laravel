<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use App\Models\Sindico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SindicoAtivoController {

	public function index(): View {
		$sindicosAtivosIds = Condominio::query()->whereNotNull('sindico_id')->pluck('sindico_id');

		return view('definicaoSindicoAtivo')
				->with('condominios', Condominio::query()->whereNull('sindico_id')->get())
				->with('sindicos', Sindico::query()->whereNotIn('id', $sindicosAtivosIds)->get())
				->with('condominiosSindicoAtivo', Condominio::query()->whereNotNull('sindico_id')->get());
	}

	public function definir(Request $request): RedirectResponse {

		$request->validate([
				'condominio' => ['required', 'exists:condominios,id'],
				'sindico' => ['required', 'exists:sindicos,id'],
		]);

		$condominio = Condominio::find($request->get('condominio'));
		$sindico = Sindico::find($request->get('sindico'));

		$condominio->sindico()->associate($sindico);
		$condominio->save();

		return redirect(route('definicaoSindicoAtivo'));
	}

}
