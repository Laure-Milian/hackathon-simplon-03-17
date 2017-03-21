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

        $this->testCentre($centre, $configCentre);
        return redirect('/'.$centre);
    }

    public function testCentre($centre, $data){
        if(Storage::disk('local')->exists('configCentre.json')){
            $json = Storage::get('configCentre.json');
            $json = json_decode($json);

            $json->$centre = $data;
            $json = json_encode($json);
        }
        else {
            $json = json_encode([$centre => $data]);
        }
        Storage::put('configCentre.json', $json);
    }

    public function displayCentre($ville){
        $centresList = ["aix", "bordeaux", "lille", "lyon", "marseille", "montpellier", "nantes", "paris", "toulouse"];
        $centreExists = false;
        for ($i=0; $i < count($centresList) ; $i++) {
            if($ville === $centresList[$i]){
                $centreExists = true;
            }
        }
        if(!$centreExists){
            return redirect('/');
        }

        $json = Storage::get('configCentre.json');
        $json = json_decode($json);
        $configCentre = $json->$ville;
        $articles = app('App\Http\Controllers\BlogController')->getArticles();

        $profDate = app('App\Http\Controllers\ProfController')->getDates($ville);
        $profs = $profDate[0];
        $dateNow = $profDate[1];
        $codePostal = $profDate[2];

        $events = app('App\Http\Controllers\PlanningController')->getEventsFromTimeline($ville);

        return view('display.modules', ['configCentre' => $configCentre, 'ville' => $ville, 'articles' => $articles, 'dateNow' => $dateNow, 'profs' => $profs, 'codePostal' => $codePostal, 'events' => $events]);
    }
}
