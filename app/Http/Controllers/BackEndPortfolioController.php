<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;


class BackEndPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = view('portfolio_new.back_end.home');
        return view('portfolio_new.back_end.master')->with('content',$home);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_menu()
    {
               $menu = view('admin.pages.main_menu.add_menu');
        return view('admin.admin_master')->with('content',$menu);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_topmenu(Request $request)
    {
        $data=array();
        $data['menu_title']= $request->txtmenu_title;
        $data['menu_description']= $request->txtmenu_description;
        $data['menu_status']= $request->txtmenu_status;
        $result = DB::table('top_menu')->insert($data);
            if($result){
        Session::put('save',"Data Saved successfully");
        return Redirect::to('/add-menu');
        }else{
             Session::put('nsave',"Data did not saved successfully");
              return Redirect::to('/add-menu');
        }

    }


    public function manage_menu(){
        $menu_info = DB::table('top_menu')->get();
        $manage_menu = view('admin.pages.main_menu.manage_menu')->with('all_menu_info',$menu_info);
        return view('admin.admin_master')->with('content',$manage_menu);
    }

    public function edit_menu($menu_id){
         $menu_info = DB::table('top_menu')
                 ->where('menu_id',$menu_id)
                 ->first();
        $menu = view('admin.pages.main_menu.edit_menu')->with('u_menu',$menu_info);
        return view('admin.admin_master')->with('content',$menu);
    }
    public function update_menu(Request $request){
        $data = array();
        $menu_id = $request->txtmenu_id;
        $data['menu_title'] = $request->txtmenu_name;
        $data['menu_description'] =  $request->txtmenu_description;
        $data['menu_status'] = $request->txtmenu_status;
        $result=DB::table('top_menu')
                ->where('menu_id',$menu_id)
                ->update($data);
         if($result){
        Session::put('save',"Update Data successfully");
        return Redirect::to('/edit-menu/'.$menu_id);
        }else{
             Session::put('nsave',"Data did not update successfully");
             return Redirect::to('/edit-menu/'.$menu_id);
        }
    }


    public function unpublished_menu($menu_id){
        DB::table('top_menu')
                ->where('menu_id',$menu_id)
                ->update(['menu_status' => 0]);
        return Redirect::to('manage-menu');
    }
    
    public function published_menu($menu_id){
        DB::table('top_menu')
                ->where('menu_id',$menu_id)
                ->update(['menu_status' => 1]);
        return Redirect::to('manage-menu');
    }
    public function delete_menu($menu_id){
        DB::table('top_menu')
                ->where('menu_id',$menu_id)
                ->delete();
        return Redirect::to('/manage-menu');
    }
    
    
    
    // End Menu
    
    // *****************  Start Sub-Menu *********************
    
    
    public function add_sub_menu()
    {
         $all_menu = DB::table('top_menu')
                        ->where('menu_status',1)
                        ->get();     // for dropdown load 
         $menu = view('admin.pages.main_menu.add_sub_menu')->with('all_menu',$all_menu);
        return view('admin.admin_master')->with('content',$menu);
                                     
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_sub_menu(Request $request)
    {
        $data=array();
        $data['menu_id']=$request->txtmenu_id;
        $data['sub_menu_title']= $request->txtmenu_title;
        $data['sub_menu_description']= $request->txtmenu_description;
        $data['status']= $request->txtmenu_status;
        $data['created_at']=date('Y-m-d h:i:s');
        $data['updated_at']=date('Y-m-d h:i:s');
        $result = DB::table('tbl_sub_menu')->insert($data);
            if($result){
        Session::put('save',"Data Saved successfully");
        return Redirect::to('/add-sub-menu');
        }else{
             Session::put('nsave',"Data did not saved successfully");
              return Redirect::to('/add-sub-menu');
        }

    }


    public function manage_sub_menu(){
     
        $sub_menu_info = DB::table('tbl_sub_menu')
                ->join('top_menu','tbl_sub_menu.menu_id','=','top_menu.menu_id')
                ->select('tbl_sub_menu.*','top_menu.menu_title')
                ->get();
        $manage_menu = view('admin.pages.main_menu.manage_sub_menu')->with('all_sub_menu_info',$sub_menu_info);
        return view('admin.admin_master')->with('content',$manage_menu);
    }

    public function edit_sub_menu($menu_id){
        
        
         $all_menu = DB::table('top_menu')
                        ->where('menu_status',1)
                        ->get();     // for dropdown load 
        
         $sub_menu_info = DB::table('tbl_sub_menu')
                 ->join('top_menu','tbl_sub_menu.menu_id','=','top_menu.menu_id')
                 ->select('tbl_sub_menu.*','top_menu.menu_title')
                 ->where('id',$menu_id)
                 ->first();
        $menu = view('admin.pages.main_menu.edit_sub_menu')
                ->with('u_menu',$sub_menu_info)
                ->with('all_menu',$all_menu);
        return view('admin.admin_master')->with('content',$menu);
    }
    public function update_sub_menu(Request $request){
        $data = array();
        $menu_id = $request->txtsubmenu_id;
        $data['menu_id']=$request->txtmenu_id;
        $data['sub_menu_title'] = $request->txtmenu_name;
        $data['sub_menu_description'] =  $request->txtmenu_description;
        $data['status'] = $request->txtmenu_status;
        $data['updated_at']=date('Y-m-d H:i:s');
        $result=DB::table('tbl_sub_menu')
                ->where('id',$menu_id)
                ->update($data);
         if($result){
        Session::put('save',"Update Data successfully");
        return Redirect::to('/edit-sub-menu/'.$menu_id);
        }else{
             Session::put('nsave',"Data did not update successfully");
             return Redirect::to('/edit-menu/'.$menu_id);
        }
    }


    public function unpublished_sub_menu($menu_id){
        DB::table('tbl_sub_menu')
                ->where('id',$menu_id)
                ->update(['status' => 0]);
        return Redirect::to('manage-sub-menu');
    }
    
    public function published_sub_menu($menu_id){
        DB::table('tbl_sub_menu')
                ->where('id',$menu_id)
                ->update(['status' => 1]);
        return Redirect::to('manage-sub-menu');
    }
    public function delete_sub_menu($menu_id){
        DB::table('tbl_sub_menu')
                ->where('menu_id',$menu_id)
                ->delete();
        return Redirect::to('/manage-menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
