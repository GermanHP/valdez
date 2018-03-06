<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacebookFeedController extends Controller
{
    public function feed(){
        return view('liquidaciones.liquidacionesHoy');
    }
}
