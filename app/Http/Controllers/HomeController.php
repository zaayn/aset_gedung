<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;
use App\Models\Kampus;
use App\Models\Ruang;
use App\Models\User;

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
        $data['user'] = User::count();
        $data['kampus'] = Kampus::count();
        $data['gedung'] = Gedung::count();
        $data['ruang'] = Ruang::count();
        return view('home',$data);
    }
}
