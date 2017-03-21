<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adonis_tl;
use Carbon\Carbon;

class PlanningController extends Controller
{
    
    public function getTimeline() {
    	echo "hey";
    	$today = substr(Carbon::now(), 0, 10);
    	$events = Adonis_tl::where('laDate', '>=', $today)
		->orderBy('laDate', 'asc')
		->take(60)
		->get();
    	foreach ($events as $event) {
    		if ($event->laDate >= $today)
    			echo '<div>' . $event->laDate . '</div>';
    	}
    	return view('modules/planning');
    }


}
