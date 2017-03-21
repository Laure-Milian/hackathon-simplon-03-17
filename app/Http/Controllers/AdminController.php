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

        $jsonCentre = json_encode([$centre => $configCentre]);
        $this->testCentre($centre, $configCentre);
        return redirect('/'.$centre);
    }

    public function testCentre($centre, $data){
        $json = Storage::get('configCentre.json');
        $json = json_decode($json);

        $json->$centre = $data;
        $json = json_encode($json);
        Storage::put('configCentre.json', $json);
    }

    public function displayCentre($ville){
        $json = Storage::get('configCentre.json');
        $json = json_decode($json);
        $configCentre = $json->$ville;
        $articles = app('App\Http\Controllers\BlogController')->getArticles();

        return view('display.modules', ['configCentre' => $configCentre, 'ville' => $ville, 'articles' => $articles]);
    }
}
