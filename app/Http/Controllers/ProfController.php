<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prof;

class ProfController extends Controller
{
  public function getDates(){
    $profs = Prof::all();
    $dateNow = date('m-d');
    foreach ($profs as $value) {
      $birthday = substr($value->dateNaissance, 5);
      if ($dateNow == $birthday && substr($value->CP,0,2) == "31") {
        echo $value->prenom.substr($value->dateNaissance,5);
      }
    }
    return view('modules.prof', compact('profs'));
  }

}
