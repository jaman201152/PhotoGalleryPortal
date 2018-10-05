@extends('admin.admin_master')
@section('content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Update Sub menu</a></li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Sub Menu Form</h2>
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
            {!! Form::open(["url"=>"/update-sub-menu","class"=>"form-horizontal","method"=>"post"]) !!}

            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Sub Menu Name </label>
                    <div class="controls">
                        <input type="text" name="txtmenu_name" value="{{ $u_menu->sub_menu_title }}" class="span6" id="txtmenu_name"  />
                        
                        <input type="hidden" name="txtsubmenu_id" value="{{ $u_menu->id }}" />
                    </div>
                </div>          
                <div class="control-group">
                    <label class="control-label" for="textarea2">Menu Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="txtmenu_description" rows="3">
                            {{ $u_menu->sub_menu_description }}
                        </textarea>
                    </div>
                </div>
                
                
                <div class="control-group">
                    <label class="control-label" for="txtmenu_id">Under Menu</label>
                    <div class="controls">
                        <select name="txtmenu_id" required="true">
                     
                             <option value="{{ $u_menu->menu_id }}">{{ $u_menu->menu_title }}</option>
                                                 
                            
                            @foreach($all_menu as $v_menu )
                        
                            <option value="{{ $v_menu->menu_id }}">{{ $v_menu->menu_title }}</option>
                            
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="textarea2">Menu Status</label>
                    <div class="controls">
                        <select name="txtmenu_status">
                           
                            <?php
                                if($u_menu->status==1){
                                    ?>
                            <option value="1">Published</option>
                            <option value="0">Not Published</option>
                            <?php
                                }elseif($u_menu->status==0){
                                    ?>
                            <option value="0">Not Published</option>
                            <option value="1">Published</option>
                                    <?php
                                }
                                ?>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{URL::to('manage-menu')}}" type="reset" class="btn">
                            Cancel
                    </a>
                </div>
            </fieldset>
            {!! Form::close() !!}

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection                    