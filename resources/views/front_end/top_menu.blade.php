
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="#home"> </a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<?php
			$query_menu = DB::table('top_menu')
							->where('menu_status',1)
							->get();
				foreach ($query_menu as $v_query_menu) {
					?>
			
			<a href="#{{strtolower($v_query_menu->menu_title)}}" class="smoothScroll">
			{{$v_query_menu->menu_title}}
			</a>
			<?php
				}
			 ?>
			<a href="#portfolio" class="smoothScroll">Portfolio</a>
			<a target="__blank" href="https://www.facebook.com/jaman201152"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>

		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>

@endsection