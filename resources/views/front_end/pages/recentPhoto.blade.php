@extends('front_end.master')
@section('recentPhoto')
<?php
$recent = DB::table('tbl_blog')
        ->join('tbl_category','tbl_blog.category_id','=','tbl_category.category_id')
        ->select('tbl_blog.*','tbl_category.category_name')
        ->where('tbl_blog.publication_status', 1)
        ->orderBy('tbl_blog.blog_id', 'desc')
        ->take(10)
        ->get();

$category = DB::table('tbl_category')->where('publication_status',1)->get();
?>



                            <div id="filters-container" class="cbp-l-filters-button">
                                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
                                    <div class="cbp-filter-counter"></div>
                                </div>
                                @foreach($category as $v_category)
                                
                                <div data-filter=".{{$v_category->category_name}}" class="cbp-filter-item">{{$v_category->category_name}}
                                    <div class="cbp-filter-counter"></div>
                                </div>
                                
                                @endforeach
                            </div>


                            <div id="grid-container" class="cbp-l-grid-projects">
                                <ul>

                                    @foreach($recent as $v_recent)


<li class="cbp-item {{$v_recent->category_name}}">
    <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap">
            <img src="{{URL::to('/'.$v_recent->blog_image)}}"  height="300" width="400" alt="" />
        </div>
        <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                    <a href="{{URL::to('/'.$v_recent->blog_image)}}" height="600" width="1024"   class="cbp-lightbox cbp-l-caption-buttonRight" data-title="{{$v_recent->blog_title}}<br>by {{$v_recent->author_name}}">view larger</a>
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-l-grid-projects-title">{{$v_recent->blog_title}}</div>
    <div class="cbp-l-grid-projects-desc">{{$v_recent->category_name}}</div>
</li>
<!--
<li><a href="{{ URL::to('/details-blog/'.$v_recent->blog_id) }}" target="_parent"></a></li>
-->
@endforeach
                                    

                                </ul>
                            </div>

                            <div class="cbp-l-loadMore-button">
                                <a href="ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
                            </div>


@endsection