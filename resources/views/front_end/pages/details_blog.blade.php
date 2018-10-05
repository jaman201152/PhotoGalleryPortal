@extends('front_end.master')
@section('content')


<div class="post_section">

    <div class="post_date">
        30<span>Nov</span>
    </div>
    <div class="post_content">

        <h2><a href="{{ URL::to('/details-blog/'.$blog_info->blog_id) }}">{{ $blog_info->blog_title }}</a></h2>

        <strong>Author:</strong> {{ $blog_info->author_name }} | 
        <strong>Category:</strong> <a href="{{ URL::to('/all-blog-by-category/'.$blog_info->category_id)}}">{{ $blog_info->category_name }}</a>
        | <strong>Views: {{$blog_info->hit_count}}</strong>
        <a href="{{URL::to($blog_info->blog_image)}}" target="_parent">
            <img src="{{URL::to($blog_info->blog_image)}}" alt="upload image" width="400" height="200" /></a>
         <p> 
           <?php echo $blog_info->blog_short_description; ?>
        </p> 
        <p> 
           <?php echo $blog_info->blog_long_description; ?>
        </p> 
        <p><a href="blog_post.html">24 Comments</a></p>
    </div>
    <div class="cleaner"></div>
</div>

@endsection


@section('sidebar_content')
 <h4>Categories</h4>
                <ul class="templatemo_list">
                    @foreach($category_info as $v_category)
                    <li><a href="{{ URL::to('/all-blog-by-category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></li>
                    @endforeach
                </ul>
                
                <div class="cleaner_h40"></div>
                
                @yield('recent')
                @yield('popular')
                <div id="ads">
                    <a href="#"><img src="{{asset('public/front_end/images/templatemo_200x100_banner.jpg')}}" alt="banner 1" /></a>
                    
                    <a href="#"><img src="{{asset('public/front_end/images/templatemo_200x100_banner.jpg')}}" alt="banner 2" /></a>
                </div>

                @endsection
