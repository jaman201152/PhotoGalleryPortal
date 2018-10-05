@extends('front_end.master')
@section('popular')
<?php
   $popular = DB::table('tbl_blog')
            ->orderBy('hit_count','desc')
            ->where('publication_status',1)
            ->take(3)
            ->get();
?>
<h4> Popular </h4>
<ul class="templatemo_list">
    @foreach($popular as $v_popular)
    <li><a href="{{ URL::to('/details-blog/'.$v_popular->blog_id) }}" target="_parent">
            {{ $v_popular->blog_title }}
        </a>
    </li>
    @endforeach
</ul>
@endsection