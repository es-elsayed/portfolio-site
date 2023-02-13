<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $alocale = $this->getAuthLocale($request);
        $rlocale = $this->parseLocale($request);

        // override auth locale if exits
        $locale = $alocale ?? $rlocale;

        if ($locale) {
            app()->setLocale($locale);
        }

        return $next($request);
    }

    protected function getAuthLocale($request)
    {
        $locales = config('app.locales');

        if ($request->user()) {
            $locale = $request->user()->locale;
            if (array_key_exists($locale, $locales)) {
                return $locale;
            }
        }
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function parseLocale($request)
    {
        $locales = config('app.locales');

        $locale = $request->server('HTTP_ACCEPT_LANGUAGE');
        $locale = substr($locale, 0, strpos($locale, ',') ?: strlen($locale));

        if (session()->has('locale')) {
            $locale = session('locale');
        }

        if (array_key_exists($locale, $locales)) {
            return $locale;
        }

        $locale = substr($locale, 0, 2);
        if (array_key_exists($locale, $locales)) {
            return $locale;
        }
    }
}
