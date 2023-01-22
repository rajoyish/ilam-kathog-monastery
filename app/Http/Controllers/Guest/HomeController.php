<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Album;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function aboutMonastery()
    {
        return view('home.about-monastery');
    }

    public function latestThreeAlbums()
    {
        $albums = Album::with('galleries')
            ->take(3)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home.index', compact('albums'));
    }
}
