@extends('admin.admin_master')
@section('content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Update Category</a></li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category Form</h2>
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
            {!! Form::open(["url"=>"/update-category","class"=>"form-horizontal","method"=>"post"]) !!}

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Category Name </label>
                    <div class="controls">
                        <input type="text" name="txtcategory_name" value="{{ $u_category->category_name }}" class="span6" id="txtcategory_name"  />
                        
                        <input type="hidden" name="txtcategory_id" value="{{ $u_category->category_id }}" />
                    </div>
                </div>          
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Category Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="txtcategory_description" rows="3">
                            {{ $u_category->category_description }}
                        </textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Publication Status</label>
                    <div class="controls">
                        <select name="txtpublication_status">
                           
                            <?php
                                if($u_category->publication_status==1){
                                    ?>
                            <option value="1">Published</option>
                            <?php
                                }else{
                            ?>
                                <?php } ?>
                            <option value="1">Published</option>
                            <option value="0">Not Published</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
            {!! Form::close() !!}

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection                    