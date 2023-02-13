<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ChangeLocaleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChangeLocaleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ChangeLocaleRequest $request)
    {
        $locale = $request['locale'];

        $user = $request->user();
        $user->locale = $locale;
        $user->save();

        app()->setLocale($locale);
        Session::put('locale', $locale);

        return back()->with('success', __('app.locale.success'));
    }
}
