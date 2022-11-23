<?php

namespace App\Http\Controllers;

use App\Models\Setfoods;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;

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

    public function add(Request $request){
        $setfood = new Setfoods();
        $setfood->name = $request->name;
        $setfood->price = $request->price;
        $setfood->detail = $request->detail;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/template/admin/upload/setfood/', $filename);
            Image::make(public_path() . '/template/admin/upload/setfood/' . $filename);
            $setfood->image = $filename;
        } else {
            $setfood->image = 'nopic.jpg';
        }
        $setfood->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('adminpage.setfoodadmin.adminsetfood');
    }

    public function formedit($setfoods_id)
    {  
        $setfood = Setfoods::find($setfoods_id);
        return view('adminpage.setfoodadmin.adminsetfoodformedit',compact('setfood'));
    }

    public function update(Request $request, $setfoods_id){
        
        if ($request->hasFile('image')) {
            $setfood = Setfoods::find($setfoods_id);
             // ลบรูปภาพ
            if ($setfood->image != 'nopic.jpg') {
                File::delete(public_path() . '/template/admin/upload/setfood/' . $setfood->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/template/admin/upload/setfood/', $filename);
            Image::make(public_path() . '/template/admin/upload/setfood/' . $filename);
            $setfood->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $setfood->name = $request->name;
            $setfood->price = $request->price;
            $setfood->detail = $request->detail;
          
          
        } else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $setfood = Setfoods::find($setfoods_id);
            $setfood->name = $request->name;
            $setfood->price = $request->price;
            $setfood->detail = $request->detail;
        }
        
        $setfood->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('adminpage.setfoodadmin.adminsetfood');
    }

    public function delete($setfoods_id){
        $setfood = Setfoods::find($setfoods_id);
        if ($setfood->image != 'nopic.jpg') {
            File::delete(public_path() . '/template/admin/upload/setfood/' . $setfood->image);
        }
        $setfood->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('adminpage.setfoodadmin.adminsetfood');
    }
}
