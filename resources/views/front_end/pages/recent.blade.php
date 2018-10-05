@extends('front_end.master')
@section('recent')
<?php
   $recent = DB::table('tbl_blog')
            ->orderBy('blog_id','desc')
            ->where('publication_status',1)
            ->take(3)
            ->get();
?>
<h4>Recent Post</h4>
<ul class="templatemo_list">
    @foreach($recent as $v_recent)
    <li><a href="{{ URL::to('/details-blog/'.$v_recent->blog_id) }}" target="_parent">{{$v_recent->blog_title}}</a></li>
    @endforeach
</ul>
@endsection