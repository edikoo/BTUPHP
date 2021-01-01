<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sawyobshi = Parcel::parcelCount(1);
        $gzashi = Parcel::parcelCount(2);
        $chamosuli = Parcel::parcelCount(3);
        return view('home', compact('sawyobshi', 'gzashi', 'chamosuli'));
    }
}
