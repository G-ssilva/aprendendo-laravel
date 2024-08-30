<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CondominioController extends Controller {

	public function index(): View {
		return view('condominio')
				->with('condominios', Condominio::all());
	}

	public function cadastrar(Request $request): RedirectResponse {

		$request->validate([
				'nome' => ['required', 'max:25'],
				'cep' => ['required', 'unique:condominios', 'digits:8'],
		]);

		Condominio::create([
				'nome' => $request->get('nome'),
				'cep' => $request->get('cep'),
		]);

		return redirect(route('condominio'));
	}

}
