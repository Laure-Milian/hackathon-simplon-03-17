<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adonis_tl;
use App\Centre;
use App\Lien_F_Cen;
use App\Prof;
use App\Locaux;
use Carbon\Carbon;

class PlanningController extends Controller
{

    private $_events;
    private $_selected_events = [];

    public function getEventsFromTimeline($ville) {
    	$today = substr(Carbon::now(), 0, 10);
    	$this->_events = Adonis_tl::where('laDate', '=', $today)
		// ->orderBy('laDate', 'asc')
		->orderBy('debut', 'asc')
		->take(3000)
		->get();
		$num_center = $this->selectCenter($ville);
		$num_formation = $this->getNumFormation($num_center);
		$this->selectEvents($num_formation);
		$this->getTeacherName();
		$this->getLocalName();
    	return $this->_selected_events;
    }

    public function selectCenter($ville) {
    	$ville = ucfirst($ville);
    	$centers = Centre::all();
    	$num_center;
        if($ville == "Aix"){
            $num_center = 14;
        }
    	if ($ville === "Toulouse") {
    		$num_center = 16;
    	}
    	else if ($ville === "Bordeaux") {
    		$num_center = 17;
    	}
    	else {
    		foreach ($centers as $center) {
    			if($center->ville === $ville) {
    				$num_center = $center->Num_Cen;
    			}
    		}
    	}
    	return $num_center;
    }

    public function getNumFormation($num_cen) {
    	$Num_Formations = Lien_F_Cen::where('Num_Cen', $num_cen)
    	->get();
    	$Corresponding_Formations = [];
    	foreach ($Num_Formations as $Num_Formation) {
    		array_push($Corresponding_Formations, $Num_Formation->Num_F);
    	}
    	return $Corresponding_Formations;
    }

    public function selectEvents($num_f) {
    	foreach ($this->_events as $event) {
    		if (in_array($event->Num_F, $num_f)) {
    			array_push($this->_selected_events, $event);
    		}
    	}
    }

    public function getTeacherName() {
    	foreach ($this->_selected_events as $event) {
    		$prof = Prof::where('Num_Prof', $event->Num_Prof)->get(['nom']);
    		$event->Num_Prof = $prof;
    	}
    }

    public function getLocalName() {
    	foreach ($this->_selected_events as $event) {
    		$local = Locaux::where('Num_L', $event->Num_Salle)->get(['Nom']);
    		$event->Num_Salle = $local;
    	}
    }

}
