<?php

namespace App\Http\Controllers\EspacePublic\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index($lang){
        $sites = Site::all();
        \Debugbar::info($sites);
        return view("public.site.index",compact('lang','sites'));
    }

    public function show($lang, Site $site){
        return view("public.site.show",compact("lang","site"));
    }

    public function demand($lang, Site $site){
        return view("public.site.demand",compact("lang","site"));
    }
}
