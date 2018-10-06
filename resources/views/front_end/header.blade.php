@extends('front_end.master')
@section('header')


                <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="topleft-info">
                                    <li><i class="fa fa-phone"></i> +0123456</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search" title="Click to start searching"></span>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="{{URL::to('public/front_end/img/logo.png')}}" alt="" width="199" height="52" /></a>
                        </div>
                        <div class="navbar-collapse collapse ">
                            <ul class="nav navbar-nav">
                                
                                
                                	<?php
			$query_menu = DB::table('top_menu')
					->where('menu_status',1)
                                        ->get();
                             
                        
                                 
				foreach ($query_menu as $v_query_menu) {
                                                       
                                      $query_sub_menu = DB::table('tbl_sub_menu')
                                        ->where('status',1)
                                        ->where('menu_id',$v_query_menu->menu_id)
                                        ->get();
                                      $num = $query_sub_menu->count();
                                     if($num>0){
                                        ?>
                                             
               <li class="dropdown">
                   <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><?php echo $v_query_menu->menu_title; ?> <i class="fa fa-angle-down"></i></a>
                             <ul class="dropdown-menu">                    
                                <?php
                                    foreach($query_sub_menu as $v_query_sub_menu){
                                                                    
                                     
                                       ?>
                              
                                        <li><a href="{{URL::to('sub-content/'.$v_query_sub_menu->id)}}"><?php echo $v_query_sub_menu->sub_menu_title; ?></a></li>
                                 
                        <?php
                                             
                                 }
                                 ?>
                                   </ul>
                                </li>    
                                     <?php
			
                         }else{
                         ?>                           
                                <li>   
                                    <a href="{{URL::to('content/'.$v_query_menu->menu_id)}}" class="smoothScroll">
                                    {{$v_query_menu->menu_title}}
                                    </a>
                                </li> 
                            
                             <?php
                         }
				}
			 ?>
                                
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
    
    
            @endsection