<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function getAdminInfo(Request $request) {
        $centre = $request->centre;
        $meteo = $request->meteo;
        $blog = $request->blog;
        $anniversaire = $request->anniversaire;
        $planning = $request->planning;

        $configCentre = ["meteo" => $meteo, "blog" => $blog, "anniversaire" => $anniversaire, "planning" => $planning];

        $json = json_encode([$centre => $configCentre]);
        Storage::put('configCentre.json', $json);
    }
}
