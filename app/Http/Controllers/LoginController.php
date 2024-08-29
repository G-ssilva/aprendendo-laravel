<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

	/** @noinspection PhpMissingParentConstructorInspection */
	public function __construct() {
		$this->middleware(function ($request, $next) {
			return $next($request);
		});
	}

	public function index() {
		return view('login');
	}

	public function autenticar(Request $request): RedirectResponse {
		$credenciais = $request->validate([
				'login' => ['required'],
				'password' => ['required'],
		]);

		if (Auth::attempt($credenciais)) {
			$request->session()->regenerate();

			return redirect()->route('paginaInicial');
		}

		return back()->withErrors([
				'login' => 'Login ou senha incorreto. Tente novamente.',
		])->onlyInput('login');
	}

	public function logout(Request $request): RedirectResponse {
		Auth::logout();

		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return redirect(route('login'));
	}

}