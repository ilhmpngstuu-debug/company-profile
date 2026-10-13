<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Menampilkan seluruh data 10 outlet GIOI Group (Menu Utama).
     */
    public function index()
    {
        $outlets = Outlet::all();

        return view('outlets.index', compact('outlets'));
    }

    /**
     * Menampilkan detail satu outlet / cabang.
     */
    public function show(string $slug)
    {
        $outlet = Outlet::where('slug', $slug)->firstOrFail();

        return view('outlets.show', compact('outlet'));
    }
}

