<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Gate;

class Controller extends BaseController {
	use AuthorizesRequests, ValidatesRequests;

	public function __construct() {
		$this->middleware(function ($request, $next) {
			Gate::authorize('isAdmin');
			return $next($request);
		});
	}
}
