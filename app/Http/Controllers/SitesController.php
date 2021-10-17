<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;


class SitesController extends Controller
{
    public function index($lang){
        $sites = Site::all();
        \Debugbar::info($sites);
        return view("home.site",compact('lang','sites'));
    }

    public function show($lang, Site $site){
        return view("home.show",compact("lang","site"));
    }
}
