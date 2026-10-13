<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menu 1: Beranda GIOI Group.
     */
    public function home()
    {
        $featuredOutlets = Outlet::take(3)->get();

        return view('pages.home', compact('featuredOutlets'));
    }

    /**
     * Menu 2: Tentang Kami (Our Brand & Story Anthony Sadeli).
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Menu 4: Kontak & Reservasi.
     */
    public function contact()
    {
        $allOutlets = Outlet::select('name', 'rsvp', 'address', 'city')->get();

        return view('pages.contact', compact('allOutlets'));
    }
}
