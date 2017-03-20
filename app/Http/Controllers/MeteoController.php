<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Centre;

class MeteoController extends Controller
{

	public function getCenter() {
		$villes = Centre::all();
		return view ('modules/meteo', ['villes' => $villes]);
	}

}
