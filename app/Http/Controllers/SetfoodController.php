<?php

namespace App\Http\Controllers;

use App\Models\Setfoods;
use Illuminate\Http\Request;

class SetfoodController extends Controller
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
        $read = setfoods::all();
        return view('adminpage.setfoodadmin.adminsetfood', compact('read'));
    }
    public function formadd()
    {  
        return view('adminpage.setfoodadmin.adminsetfoodformadd');
    }

    public function formedit()
    {  
        return view('adminpage.setfoodadmin.adminsetfoodformedit');
    }
}
