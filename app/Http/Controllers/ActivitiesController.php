<?php

namespace App\Http\Controllers;

use App\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    function get(){
        $activities = Activities::all();
        return response()->json($activities);
    }
}
