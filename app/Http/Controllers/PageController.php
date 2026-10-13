<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Halaman Beranda (Menu 1).
     */
    public function home()
    {
        $featuredServices = Service::take(3)->get();

        return view('pages.home', compact('featuredServices'));
    }

    /**
     * Halaman Tentang Kami (Menu 2).
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Halaman Kontak (Menu 4).
     */
    public function contact()
    {
        return view('pages.contact');
    }
}

