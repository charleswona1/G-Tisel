<?php

namespace App\Http\Controllers\EspacePublic\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index(){
        $sites = Site::all();
        \Debugbar::info($sites);
        return view("public.site.index",compact('sites'));
    }

    public function show(Site $site){
        return view("public.site.show",compact("site"));
    }

    public function demand(Site $site){
        return view("public.site.demand",compact("site"));
    }
}
