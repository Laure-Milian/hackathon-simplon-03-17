<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Centre;

class MeteoController extends Controller
{

	public function getCenter() {
		// $json = file_get_contents('CHEMIN_VERS_FICHIER_JSON');
		// $json = json_decode($json);
		
		// $villes = Centre::all();
		// return view ('modules/meteo', ['villes' => $villes]);
		
		$ville = ucfirst("toulouse");
		return view('modules/meteo', ['ville' => $ville]);
	}

}
