<div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                                   <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Main Menu <i class="icon-angle-left pull-right hi"></i></span></a>
                                <ul>
                                    <li><a class="submenu" href="{{URL::to('add-menu')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Menu </span></a></li>
                                    <li><a class="submenu" href="{{URL::to('/manage-menu')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Menu </span></a></li>
                                    <li><a class="submenu" href="{{URL::to('add-sub-menu')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Sub Menu</span></a></li>
                                    <li><a class="submenu" href="{{URL::to('manage-sub-menu')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Sub Menu </span></a></li>
                                </ul>   
                            </li>
                                    <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Blog</span> <i class="icon-angle-left pull-right hi"></i> </a>
                                <ul>
                                    <li><a class="submenu" href="{{URL::to('/add-category')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Category</span></a></li>
                                    <li><a class="submenu" href="{{URL::to('/manage-category')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Category</span></a></li>
                                    <li>
                                    <a class="submenu" href="{{URL::to('/add-blog')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Blog</span></a>
                                    </li>
                                    <li>
                                    <a class="submenu" href="{{URL::to('/manage-blog')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Blog</span></a>
                                    </li>
                                </ul>   
                            </li>
                          
                         <!--
                            <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                            <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                            <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                            <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                            <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                            <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                            <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                            <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                            <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                         
                         
                         -->
                         
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">
                      @yield('content')
                </div><!--/.fluid-container-->
              
                <!-- end: Content -->
                
            </div><!--/#content.span10-->