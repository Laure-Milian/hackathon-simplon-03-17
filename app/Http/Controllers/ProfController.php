<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prof;

class ProfController extends Controller
{
  public function getDates(){
    $profs = Prof::all();
    return view('modules.prof', compact('profs'));
  }
}
