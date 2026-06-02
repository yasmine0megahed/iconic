<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function swap(string $locale): RedirectResponse
    {
        if (array_key_exists($locale, config('locale.languages'))) {
            Session::put('locale', $locale);
        }

        return redirect()->back();
    }
}
