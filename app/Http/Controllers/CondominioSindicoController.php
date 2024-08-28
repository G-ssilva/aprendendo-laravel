<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use App\Models\Sindico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CondominioSindicoController extends Controller {

	public function index(): View {
		return view('vinculoCondominioSindico')
				->with('condominios', Condominio::all())
				->with('sindicos', Sindico::all());
	}

	public function vincular(Request $request): RedirectResponse {
		$request->validate([
				'condominio' => ['required', 'exists:condominios,id'],
				'sindicos' => ['required', 'exists:sindicos,id'],
		]);

		$condominio = Condominio::find($request->get('condominio'));
		$condominio->sindicos()->sync($request->get('sindicos'));

		$condominio->save();

		return redirect(route('vinculoCondominioSindico'));
	}

}
