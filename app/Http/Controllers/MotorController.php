<?php

namespace OrionMedical\Http\Controllers;

use Illuminate\Http\Request;

use OrionMedical\Http\Requests;
use OrionMedical\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Auth;
use Activity;
use Input;
use Response;



class MotorController extends Controller
{

     public function newpolicy()
    {
      
        $intermediary=IntermediaryList::orderby('AGENTNAME','ASC')->get();
    $source=DB::table('business_status')->get();
    $riskcategory=DB::table('business_status')->get();

    return view('motor.new', compact('intermediary'))
        ->with('source',$source)
        ->with('riskcategory',$riskcategory);

    }



}
  
