<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

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

			return redirect()->intended();
		}

		return back()->withErrors([
				'login' => 'Login ou senha incorreto. Tente novamente.',
		])->onlyInput('login');
	}

}