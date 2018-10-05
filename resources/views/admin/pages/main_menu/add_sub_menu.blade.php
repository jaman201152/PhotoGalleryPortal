@extends('admin.admin_master')
@section('content')
<style>
    
    input[type="text"]{
        border:1px #000 solid;
    }
    
</style>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Sub Menu</a></li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Sub Menu Form</h2>
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
            {!! Form::open(["url"=>"/store-sub-menu","class"=>"form-horizontal","method"=>"post"]) !!}

            <fieldset>
                  
                <div class="control-group">
                    <label class="control-label" for="typeahead">Sub Menu Name </label>
                    <div class="controls">
                        <input type="text" name="txtmenu_title" class="span6" id="txtmenu_title" required="true" style="border:1px #000 solid;"  />
                     
                    </div>
                </div>          
                <div class="control-group">
                    <label class="control-label" for="textarea2">Sub Menu Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="txtmenu_description" rows="3" required="true"></textarea>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="txtmenu_id">Under Menu</label>
                    <div class="controls">
                        <select name="txtmenu_id" required="true">
                            <option value="">Select One</option>
                            @foreach($all_menu as $v_menu )
                            <option value="{{ $v_menu->menu_id }}">{{ $v_menu->menu_title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="txtmenu_status">Publication Status</label>
                    <div class="controls">
                        <select name="txtmenu_status" required="true">
                            <option value="1">Published</option>
                            <option value="0">Not Published</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
            {!! Form::close() !!}

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection                    