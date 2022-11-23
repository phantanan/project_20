<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;

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
        $read = food::all();
        return view('adminpage.foodadmin.adminfood', compact('read'));
    }

    public function formadd()
    {  
        return view('adminpage.foodadmin.adminfoodformadd');
    }
    public function add(Request $request)
     {
        $food = new Food();
        $food->name = $request->name;
        $food->price = $request->price;
        $food->detail = $request->detail;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/template/admin/upload/food/', $filename);
            Image::make(public_path() . '/template/admin/upload/food/' . $filename);
            $food->image = $filename;
        } else {
            $food->image = 'nopic.jpg';
        }
        $food->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('adminpage.foodadmin.adminfood');
     }
    public function formedit($food_id)
    {  
        $food = Food::find($food_id);
        return view('adminpage.foodadmin.adminfoodformedit',compact('food'));
    }

    public function update(Request $request, $food_id){
        
        if ($request->hasFile('image')) {
            $food = Food::find($food_id);
             // ลบรูปภาพ
            if ($food->image != 'nopic.jpg') {
                File::delete(public_path() . '/template/admin/upload/food/' . $food->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/template/admin/upload/food/', $filename);
            Image::make(public_path() . '/template/admin/upload/food/' . $filename);
            $food->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $food->name = $request->name;
            $food->price = $request->price;
            $food->detail = $request->detail;
          
          
        } else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $food = Food::find($food_id);
            $food->name = $request->name;
            $food->price = $request->price;
            $food->detail = $request->detail;
        }
        
        $food->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('adminpage.foodadmin.adminfood');
    }

    public function delete($food_id){
        $food = Food::find($food_id);
        if ($food->image != 'nopic.jpg') {
            File::delete(public_path() . '/template/admin/upload/food/' . $food->image);
        }
        $food->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('adminpage.foodadmin.adminfood');
    }
}
