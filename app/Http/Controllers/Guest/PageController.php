<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $comics = config('comics');
        $menulinks = config('menulinks');
        $footerlinks = config('footerlinks');
        $socialicons = config('socialicons');
        $mainnavicons = config('mainnavicons');

        return view('home', compact('comics', 'menulinks', 'footerlinks', 'socialicons', 'mainnavicons'));
    }
}
