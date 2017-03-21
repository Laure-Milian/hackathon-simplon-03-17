<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prof;

class ProfController extends Controller
{
  public function getDates(){
    $profs = Prof::all();
    $dateNow = date('m-d');
    return [$profs, $dateNow];
  }

}
