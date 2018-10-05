@extends('admin.admin_master')
@section('content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Update Blog</a></li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Blog Form</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h4 style="color:green;">
                <?php
                $msg = Session::get('save');
                if ($msg != null) {
                    echo $msg;
                    Session::put('save', null);
                }
                ?>
            </h4>
            <h4 style="color:red;">
                <?php
                $nmsg = Session::get('nsave');
                if ($msg != null) {
                    echo $nmsg;
                    Session::put('nsave', null);
                }
                ?>
            </h4>
            {!! Form::open(["url"=>"/update-blog","class"=>"form-horizontal","method"=>"post","enctype"=>"multipart/form-data"]) !!}

            <fieldset>
               <div class="control-group">
                    <label class="control-label" for="typeahead">Blog Title </label>
                    <div class="controls">
                        <input type="text" name="txtblog_title" value="{{$edit_info->blog_title}}" class="span6" id="txtcategory_name"  />
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Blog Category</label>
                    <div class="controls">
                        <select name="txtcategory_id" required="true">
                            <option value="{{$edit_info->category_id}}">{{$edit_info->category_name}}</option>
                            @foreach($all_category as $v_category )
                            <option value="{{ $v_category->category_id }}">{{ $v_category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>          
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Blog Short Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="txtshort_description" rows="3">
                            {{$edit_info->blog_short_description}}
                        </textarea>
                    </div>
                </div>
                
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Blog Long Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="txtlong_description" rows="3">
                            {{$edit_info->blog_long_description}}
                        </textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="fileInput">Blog Image</label>
                    <div class="controls">
                        <img src="{{URL::to($edit_info->blog_image)}}" height="80" width="80">
                        <input class="input-file uniform_on" name="txtblog_image" id="fileInput" type="file">
                    </div>
                </div>  
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Publication Status</label>
                    <div class="controls">
                        <select name="txtpublication_status">
                           <?php
                                    if($edit_info->publication_status==1){
                           ?>
                            <option value="1">Published</option>
                                    <?php } else{ ?>
                            <option value="0">Not Published</option>
                                    <?php } ?>
                              <option value="1">Published</option>
                            <option value="0">Not Published</option>
                        </select>
                    </div>
                </div>
                
               <div class="control-group">
                    <label class="control-label" for="typeahead">Author Name </label>
                    <div class="controls">
                        <input type="text" name="txtauthor_name" value="{{$edit_info->author_name}}" class="span6" id="txtauthor_name"  />
                       
                    </div>
                </div>
                <div class="form-actions">
                    <input type="hidden" name="txtblog_id" value="{{$edit_info->blog_id}}">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
            {!! Form::close() !!}

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection                    