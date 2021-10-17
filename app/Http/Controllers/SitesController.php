<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;


class SitesController extends Controller
{
    public function index(){
        $sites = Site::all();
        \Debugbar::info($sites);
        return view("home.site",compact('sites'));
    }

    public function show( Site $site){
        return view("home.show",compact("site"));
    }
}
