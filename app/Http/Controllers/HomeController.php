<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function setLocale($locale) {
        return redirect()->back()->withCookie('locale', $locale, 100);
    }
}
