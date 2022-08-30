<?php

namespace App\Http\Controllers;

use App\models\Participant;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index ()
    {
        $winner = Participant::where('iswinner', 1)->first();
    	return view ('home', compact('winner'));
    }
   
}
