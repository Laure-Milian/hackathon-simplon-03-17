<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adonis_tl;

class PlanningController extends Controller
{
    
    public function getTimeline() {
    	echo "hey";
    	$tl = Adonis_tl::all();
    	var_dump($tl);
    	return view('modules/planning');
    }


}
