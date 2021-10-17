<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocalLanguage
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
        $availableLocales = ["en","fr"];
        $locale = session("APP_LOCALE");
        $locale = in_array($locale, $availableLocales) ? $locale: config("app.locale");
        App::setlocale($locale);
        return $next($request);
    }
}
