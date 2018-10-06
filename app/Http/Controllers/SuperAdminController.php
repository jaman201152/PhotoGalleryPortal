<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $admin_id = Session::get('admin_id');
        
        if($admin_id!=NULL){
            return view('admin.admin_master');
        }
        else{
           return Redirect::to('/admin-panel');
        }
        
    }
    
    public function logout(){
         Session::put('admin_name',null); 
         Session::put('admin_id',null); 
         Session::put('message','You are successfully logout!'); 
         return Redirect::to('admin-panel');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function add_category(){
        $category = view('admin.pages.add_category');
        return view('admin.admin_master')->with('content',$category);
    }
    public function save_category(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->txtcategory_name;
        $data['category_description']=$request->txtcategory_description;
        $data['publication_status']=$request->txtpublication_status;
        $result=DB::table('tbl_category')->insert($data);
        if($result){
        Session::put('save',"Data Saved successfully");
        return Redirect::to('/add-category');
        }else{
             Session::put('nsave',"Data did not saved successfully");
              return Redirect::to('/add-category');
        }
    }
     public function edit_category($category_id){
         $category_info = DB::table('tbl_category')
                 ->where('category_id',$category_id)
                 ->first();
        $category = view('admin.pages.edit_category')->with('u_category',$category_info);
        return view('admin.admin_master')->with('content',$category);
    }
    public function update_category(Request $request){
        $data = array();
        $cat_id = $request->txtcategory_id;
        $data['category_name'] = $request->txtcategory_name;
        $data['category_description'] =  $request->txtcategory_description;
        $data['publication_status'] = $request->txtpublication_status;
        $result=DB::table('tbl_category')
                ->where('category_id',$cat_id)
                ->update($data);
         if($result){
        Session::put('save',"Update Data successfully");
        return Redirect::to('/edit-category/'.$cat_id);
        }else{
             Session::put('nsave',"Data did not update successfully");
             return Redirect::to('/edit-category/'.$cat_id);
        }
    }
    
    public function manage_category(){
        $category_info = DB::table('tbl_category')->get();
        $manage_category = view('admin.pages.manage_category')->with('all_category_info',$category_info);
        return view('admin.admin_master')->with('content',$manage_category);
    }
    
    public function add_blog(){
        $category_info = DB::table('tbl_category')
                        ->where('publication_status',1)
                        ->get();
        $add_blog=view('admin.pages.add_blog')->with('all_category',$category_info);
        return view('admin.admin_master')->with('content',$add_blog);
    }
    public function save_blog(Request $request){
        $data = array();
        $data['blog_title'] = $request->txtblog_title;
        $data['category_id'] = $request->txtcategory_id;
        $data['blog_short_description'] = $request->txtshort_description;
        $data['blog_long_description'] = $request->txtlong_description;
        $data['publication_status'] = $request->txtpublication_status;
        $data['author_name'] = $request->txtauthor_name;
        $data['isSlideShow']=$request->isSlideShow;
        date_default_timezone_set("Asia/Dhaka");
        $data['created_at']=date('Y-m-d H:i:s');
        $image = $request->file('txtblog_image');
        if($image){
             $image_name = substr($image->getClientOriginalName(),0,20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/blog_image/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['blog_image'] = $image_url;
                $result = DB::table('tbl_blog')->insert($data);
                 if($result){
        Session::put('save',"Saved Data successfully");
        return Redirect::to('add-blog');
        }else{
             Session::put('nsave',"Data did not update successfully");
              return Redirect::to('add-blog');
        }
            }
            else{
               $result = DB::table('tbl_blog')->insert($data);
                 if($result){
        Session::put('save',"Saved Data successfully");
        return Redirect::to('add-blog');
        }else{
             Session::put('nsave',"Data did not update successfully");
              return Redirect::to('add-blog');
        }
            }
                    
        }
        
    }
    public function edit_blog($id){
        $category_info = DB::table('tbl_category')
                        ->where('publication_status',1)
                        ->get();
        $blog_info = DB::table('tbl_blog')
                    ->join('tbl_category', 'tbl_blog.category_id', '=', 'tbl_category.category_id')
                    ->select('tbl_blog.*', 'tbl_category.category_name')
                    ->where('tbl_blog.blog_id',$id)
                    ->first();
        $blog = view('admin.pages.edit_blog')
                ->with('edit_info',$blog_info)
                ->with('all_category',$category_info);
        return view('admin.admin_master')->with('content',$blog);
    }
        public function update_blog(Request $request){
        $data = array();
        $data['blog_title'] = $request->txtblog_title;
        $blog_id = $request->txtblog_id;
        $data['category_id'] = $request->txtcategory_id;
        $data['blog_short_description'] = $request->txtshort_description;
        $data['blog_long_description'] = $request->txtlong_description;
        $data['publication_status'] = $request->txtpublication_status;
        $data['author_name'] = $request->txtauthor_name;
        $data['isSlideShow']=$request->isSlideShow;
        date_default_timezone_set("Asia/Dhaka");
        $data['updated_at']=date('Y-m-d H:i:s');
        $image = $request->file('txtblog_image');
        if($image){
            // $image_name = str_random(10);
            $image_name = substr($image->getClientOriginalName(),0,20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/blog_image/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['blog_image'] = $image_url;
                $result = DB::table('tbl_blog')
                        ->where('blog_id',$blog_id)
                        ->update($data);
                 if($result){
        Session::put('save',"Saved Data successfully");
        return Redirect::to('/edit-blog/'.$blog_id);
        }else{
             Session::put('nsave',"Data did not update successfully");
                return Redirect::to('/edit-blog/'.$blog_id);
        }
            }
            else{
                Session::put('nsave',"Data did not update successfully");
                return Redirect::to('/edit-blog/'.$blog_id);
            }
                    
        }
        else{
                    $result = DB::table('tbl_blog')
                       ->where('blog_id',$blog_id)
                       ->update($data);
                 if($result){
        Session::put('save',"Saved Data successfully");
         return Redirect::to('/edit-blog/'.$blog_id);
        }else{
             Session::put('nsave',"Data did not update successfully");
                return Redirect::to('/edit-blog/'.$blog_id);
        }
        }
        
        
    }
    
    public function manage_blog(){
        $blog_info = DB::table('tbl_blog')->get();
        $manage_blog= view('admin.pages.manage_blog')->with('blog_info',$blog_info);
        return view('admin.admin_master')->with('content',$manage_blog);
    }
    public function unpublished_blog($id){
        DB::table('tbl_blog')->where('blog_id',$id)
                ->update(['publication_status'=>0]);
        return Redirect::to('manage-blog');
    }
    
    public function published_blog($id){
        DB::table('tbl_blog')->where('blog_id',$id)
                ->update(['publication_status'=>1]);
        return Redirect::to('manage-blog');
    }
    public function delete_blog($id) {
        DB::table('tbl_blog')
                ->where('blog_id',$id)
                ->delete();
        return Redirect::to('manage-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function unpublished_category($category_id){
        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update(['publication_status' => 0]);
        return Redirect::to('manage-category');
    }
    
    public function published_category($category_id){
        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update(['publication_status' => 1]);
        return Redirect::to('manage-category');
    }
    public function delete_category($category_id){
        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->delete();
        return Redirect::to('/manage-category');
    }
    
    
    public function store(Request $request)
    {
        //
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
