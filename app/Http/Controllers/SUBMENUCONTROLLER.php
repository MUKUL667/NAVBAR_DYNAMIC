<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SUBMENU;
use App\Models\MENU;
use DB;

class SUBMENUCONTROLLER extends Controller
{
    public function addpost()
{
    $menus=MENU::where('status','ENABLED')->orderBy('id','desc')->paginate(5);
    // return view('subadd-post',$submenus);
    return view('subadd-post',compact('menus'));
   
}
public function savepost(Request $request)
{
  

DB::table('s_u_b_m_e_n_u_s')->insert([
    'name'=>$request->name,
    'menu_id'=>$request->menu_id,
    'status'=>$request->status,
    'link'=>$request->link,
    

]);
return back()->with('post-subadd',"menu add succesfully");
return redirect()->with('post-subadd',"menu add succesfully");
}
}

