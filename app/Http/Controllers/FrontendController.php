<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //$home = view('front_end.home');
        $header = view('front_end.header');
        
        return view('front_end.master')->with('header',$header);
        
    }

        public function portfolio_index()
    {
            
        $menu = view('portfolio_new.front_end.top_menu');
        $top_menu_content = DB::table('top_menu')
                            ->where('menu_status',1)
                            ->get();
        $header = view('portfolio_new.front_end.home');
        $about = view('portfolio_new.front_end.about',compact('top_menu_content'));
        $contact = view('portfolio_new.front_end.contact');
        return view('portfolio_new.front_end.master')
                            ->with('menu',$menu)
                            ->with('content',$header)
                            ->with('about',$about)
                            ->with('contact',$contact);
                        
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
