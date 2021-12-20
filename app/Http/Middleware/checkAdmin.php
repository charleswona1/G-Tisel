<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $group = Auth::guard('admin')->user()->TypeCompte->libelle;
        if ($group == "Administrateur" || $group == "Super Admin" || $group == "Gestionnaire" ) {
            return $next($request);
        }else{
            Session::flash('warning', "Vous n\'avez pas les droit necessaire pour accéder a ceux module");
            return redirect()->back();
        }
        
    }
}
