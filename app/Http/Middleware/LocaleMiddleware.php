<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
public function handle($request, Closure $next)
{
    if ($locale = $request->segment(1)) {
        if (in_array($locale, config('app.supported_locales'))) {
            app()->setLocale($locale);
        }
    }

    return $next($request);
}
}
