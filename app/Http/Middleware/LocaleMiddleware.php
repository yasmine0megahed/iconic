<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if (
            config('locale.status') &&
            session()->has('locale') &&
            array_key_exists(session('locale'), config('locale.languages'))
        ) {
            $locale = session('locale');

            // Set Laravel locale
            app()->setLocale($locale);

            // PHP locale (dates, formatting)
            setlocale(LC_TIME, config('locale.languages')[$locale][1]);

            // Carbon locale (diffForHumans, etc.)
            Carbon::setLocale(config('locale.languages')[$locale][0]);

            // RTL support flag
            if (config('locale.languages')[$locale][2]) {
                session(['lang-rtl' => true]);
            } else {
                session()->forget('lang-rtl');
            }
        }

        return $next($request);
    }
}
