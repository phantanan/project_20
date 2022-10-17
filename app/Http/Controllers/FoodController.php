<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class FoodController extends Controller
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
        return view('adminpage.foodadmin.adminfood');
    }

    public function formadd()
    {  
        return view('adminpage.foodadmin.adminfoodformadd');
    }
    public function add(Request $request)
     {//C2->create
     $request->validate([
        'image'=>'null',
        'name' => 'nullable',
        'detail' => 'nullable',
        // 'typeproduct'=>'null',
        'price' => 'nullable',

   ]);

   Food::create($request->all());
    return redirect()->route('adminpage.foodadmin.adminfood')
                    ->with('success','food created successfully.');
     }
    public function formedit()
    {  
        return view('adminpage.foodadmin.adminfoodformedit');
    }
}
