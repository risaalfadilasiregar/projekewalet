<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $pengguna = Auth::user();

        if($pengguna->role == "Admin"){
            return redirect()->route('admin.index');
        }else if($pengguna->role == "User"){
            return redirect()->route('tampilan.index');
        }else{
            return redirect('/login');
        }
    }
}
