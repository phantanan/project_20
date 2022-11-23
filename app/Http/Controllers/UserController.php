<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Alert;


class UserController extends Controller
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
        $read = User::all();

        //return view('home');
        return view('adminpage.useradmin.adminuser' , compact('read'));
    }
    public function formadd()
    {  
        return view('adminpage.useradmin.adminuserformadd');
    }

    public function formedit($id)
    {  
        $useredit = User::find($id);
        return view('adminpage.useradmin.adminuserformedit',compact('useredit'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->update();
        toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.useradmin.adminuser');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.useradmin.adminuser');
    }
}
