<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MENU;
use DB;


class MENUCONTROLLER extends Controller
{
public function index()
{
    $menus = MENU::where('category',1)->orderBy('id','desc')->paginate(5);
    $submenu= MENU::where('sub_category',1)->orderBy('id','desc')->paginate(5);
    
    $result = array_merge(['menus'=>$menus,'submenu'=>$submenu]);
    
    // return view('index',compact('$data','$date1'));
    return view('index',$result);
}
public function delete($id)
{
    $menus = MENU::where('id',$id)->delete();
   
    return redirect()->back();

}
public function addpost( )
{
return view('add-post');
}
public function savepost(Request $request)
{

DB::table('_m_e_n_u')->insert([
    'name'=>$request->name,
    'status'=>$request->status,
    'link'=>$request->link,
    'category'=>$request->category,
    'sub_category'=>$request->sub_category,

]);
return back()->with('post-add',"menu add succesfully");
return redirect()->with('post-add',"menu add succesfully");

}
public function edit($id) 
{
   
    // $menus = MENU::find($id); 
    $menu=DB::table('_m_e_n_u')->where('id',$id)->first();
    return view('edit',compact('menu'));

}
 public function  updatepost(Request $request)
 {
DB::table('_m_e_n_u')->where('id', $request->id)->update([
    'name'=>$request->name,
    'status'=>$request->status,
    'link'=>$request->link,
    'category'=>$request->category,
    'sub-category'=>$request->sub_category
]);
return back()->with('post-update',"menu updated succesfully");

}
 }

