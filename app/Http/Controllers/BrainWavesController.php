<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rowdata;

class BrainWavesController extends Controller
{
    //
    public function index(){


    }
//http://127.0.0.1:8000/testa/1/1/1/1/1/1/1/1/1/1/1/1

    public function testa($data,$poorSignal,$attention,$meditation,$delta,$theta,$lowAplpha,$highAplpha,$lowBeta,$highBeta,$lowGamma,$midGamma){
      //$test = Rowdata::brainlog($data,$poorSignal,$attention,$meditation,$delta,$theta,$lowAplpha,$highAplpha,$lowBeta,$highBeta,$lowGamma,$midGamma);
      $data = Rowdata::all_brainshow();
    }

    public function log(){
      return view('test');
    }


}
