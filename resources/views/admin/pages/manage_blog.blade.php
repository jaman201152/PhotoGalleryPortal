@extends('admin.admin_master')
@section('content')
<!-- start: Content -->


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Blog Information</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Blog Id</th>
                        <th>Blog Image</th>
                        <th>Blog Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($blog_info as $v_blog) {
                        ?>
                        <tr>
                            <td><?php echo $v_blog->blog_id; ?></td>
                            <td class="center"><img src="{{URL::to($v_blog->blog_image)}}" width="50" height="50"></td>
                            <td class="center"><?php echo $v_blog->blog_title; ?></td>

                            <td class="center"> 
                                <?php
                                if ($v_blog->publication_status == 1) {
                                    ?>

                                    <span class="label label-success">Published</span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="label label-important">Unpublished</span>
                                    <?php
                                }
                                ?>

                            </td>
                            <td class="center">
    <?php
    if ($v_blog->publication_status == 1) {
        ?>
           <a class="btn btn-danger" href="{{URL::to('/unpublished-blog/'.$v_blog->blog_id)}}" title="Unpublished">
                    <i class="halflings-icon white thumbs-down"></i>  
             </a>
        <?php
    } else {
        ?>
             <a class="btn btn-success" href="{{URL::to('/published-blog/'.$v_blog->blog_id)}}" title="Published">
                  <i class="halflings-icon white thumbs-up"></i>  
             </a>
    <?php } ?>
                                <a class="btn btn-info" href="{{URL::to('/edit-blog/'.$v_blog->blog_id)}}">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete-blog/'.$v_blog->blog_id)}}" onclick="return checkDelete();">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
<?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection