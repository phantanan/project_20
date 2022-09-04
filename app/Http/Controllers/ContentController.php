<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
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
        //return view('home');
        return view('adminpage.contentadmin.admincontent');
    }

    public function formadd()
    {  
        return view('adminpage.contentadmin.admincontentformadd');
    }

    public function formedit()
    {  
        return view('adminpage.contentadmin.admincontentformedit');
    }
}
