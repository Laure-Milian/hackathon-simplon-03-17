<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prof;

class ProfController extends Controller
{
  public function getDates($ville){
    $cpList = [
      "aix" => 13,
      "bordeaux" => 33,
      "lyon" => 69,
      "lille" => 59,
      "marseille" => 13,
      "toulouse" => 31,
      "paris" => 75,
      "nantes" => 44,
      "montpellier" => 34
    ];
    $codePostal = 31;

    foreach ($cpList as $key => $value) {
      if($ville == $key){
        $codePostal = $value;
      }
    }


    $profs = Prof::all();
    $dateNow = date('m-d');
    return [$profs, $dateNow, $codePostal];
  }

}
