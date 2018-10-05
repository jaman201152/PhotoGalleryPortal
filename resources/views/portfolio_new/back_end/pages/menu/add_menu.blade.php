@extends('portfolio_new.back_end.master')
@section('content')

<div class="row mt">
          		<div class="col-lg-6">
          			<div class="form-panel">
          			{!! Form::open(['url' => 'store-topmenu','method'=>'post']) !!}
    
					
                                  <label class="col-sm-4 control-label col-lg-2" for="inputSuccess">Menu Title</label>
                                
                                      <input type="text" name="txtmenu_title" class="form-control" id="inputSuccess" required="true">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Description</label>
                                
                                      <textarea name="txtmenu_description" class="form-control" id="inputSuccess" required="true"></textarea>

						<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Status</label>
						<select class="form-control" name="txtmenu_status" required="true">
						<option value="">Please Select </option>
						  <option value="1">Published</option>
						  <option value="0">Unpublished</option>
						</select>
						
					    <br>
					    <input type="reset" class="btn btn-round btn-theme04">
					    <input type="submit" class="btn btn-round btn-success" value="Save">
			
						{!! Form::close() !!}  		
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->


@endsection