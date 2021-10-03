<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index($lang){
        return view("home.site",compact('lang'));
    }

    public function show($lang){
        return view("home.show",compact("lang"));
    }
}
