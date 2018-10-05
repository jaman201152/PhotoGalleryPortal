@extends('admin.admin_master')
@section('content')
<!-- start: Content -->


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/manage-sub-menu')}}">Manage Sub Menu</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Sub Menu</h2>
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
                        <th>SL#</th>
                        <th>Sub Menu Name</th>
                        <th>Menu Name</th>
                        <th width="400">Sub Menu Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($all_sub_menu_info as $v_menu) {
                        ?>
                        <tr>
                            <td>{{$i++}}</td>
                            <td class="center"><?php echo $v_menu->sub_menu_title; ?></td>
                            <td><?php echo $v_menu->menu_title; ?></td>
                            <td class="center"  style="overflow: scroll;"><?php echo $v_menu->sub_menu_description; ?></td>
                            <td class="center"> 
                                <?php
                                if ($v_menu->status == 1) {
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
    if ($v_menu->status == 1) {
        ?>
           <a class="btn btn-danger" href="{{URL::to('/unpublished-sub-menu/'.$v_menu->id)}}" title="Unpublished">
                    <i class="halflings-icon white thumbs-down"></i>  
             </a>
        <?php
    } else {
        ?>
             <a class="btn btn-success" href="{{URL::to('/published-sub-menu/'.$v_menu->id)}}" title="Published">
                  <i class="halflings-icon white thumbs-up"></i>  
             </a>
    <?php } ?>
                                <a class="btn btn-info" href="{{URL::to('/edit-sub-menu/'.$v_menu->id)}}">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete-sub-menu/'.$v_menu->id)}}" onclick="return checkDelete();">
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

@stop