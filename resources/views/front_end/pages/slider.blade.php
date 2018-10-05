@extends('front_end.master')
@section('slider')
<?php
$slider = DB::table('tbl_blog')
        ->join('tbl_category','tbl_blog.category_id','=','tbl_category.category_id')
        ->select('tbl_blog.*','tbl_category.category_name')
        ->where('tbl_blog.publication_status', 1)
        ->orderBy('tbl_blog.blog_id', 'desc')
        ->take(3)
        ->get();

$category = DB::table('tbl_category')->where('publication_status',1)->get();
?>
<div id="main-slider" class="main-slider flexslider">
                                <ul class="slides">
                                    @foreach($slider as $v_slider)
                                                    <li>
                                                        <img src="{{URL::to('/'.$v_slider->blog_image)}}" width="1024" height="500" alt="" />
                                        <div class="flex-caption">
                                            <h3>{{$v_slider->blog_title}}</h3>
                                            <p>{{$v_slider->blog_short_description}}</p>
                                            <a href="{{ URL::to('/details-blog/'.$v_slider->blog_id) }}" class="btn btn-theme">Details</a>
                                        </div>
                                    </li>
                                    @endforeach
                                
                                </ul>
                            </div>


@endsection