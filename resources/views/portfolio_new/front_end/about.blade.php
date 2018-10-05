@extends('portfolio_new.front_end.master')
@section('about')
	<?php 
		foreach ($top_menu_content as $v_top_menu_content) {
			?>
<section id="{{strtolower($v_top_menu_content->menu_title)}}" name="{{strtolower($v_top_menu_content->menu_title)}}"></section>
	<div id="f" class="menu_title">
		<div class="container">
			<div class="row">
				<h3><?php echo $v_top_menu_content->menu_title;  ?></h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<!-- INTRO INFORMATIO-->
				<div class="col-lg-6 col-lg-offset-3" menu_description>
				{{ strip_tags($v_top_menu_content->menu_description) }}
				</div>								
			</div>
		</div><!-- /container -->
	</div><!-- /f -->

<?php
		
		}

?>


</script>
	@endsection
	