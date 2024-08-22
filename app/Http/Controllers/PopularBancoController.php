<?php

namespace App\Http\Controllers;

use Database\Seeders\DatabaseSeeder;

class PopularBancoController extends Controller {

	public function popularBanco () {
		(new DatabaseSeeder)->run();
		return view('popularBanco');
	}

}
