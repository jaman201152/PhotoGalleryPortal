<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Admin Panel</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="{{ URL::to('public/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('public/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link id="base-style" href="{{ URL::to('public/css/style.css') }}" rel="stylesheet">
        <link id="base-style-responsive" href="{{ URL::to('public/css/style-responsive.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="{{ URL::to('public/css/ie.css') }}" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="{{ URL::to('public/css/ie9.css') }}" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- end: Favicon -->

        <script type="text/javascript">
               function checkDelete(){
                   var chk = confirm('Are you sure want to delete!');
                   if(chk){
                    return true;   
                   }
                   else{
                       return false;
                   }
               }
        
        </script>


    </head>

    <body>
        <!-- start: Header -->
       @include('admin.navbar')
        <!-- start: Header -->

        <div class="container-fluid-full">
            @include('admin.main_menu')
            
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>
        
        @include('admin.footer')

        <!-- start: JavaScript-->

        <script src="{{ URL::to('public/js/jquery-1.9.1.min.js') }}"></script>
        <script src="{{ URL::to('public/js/jquery-migrate-1.0.0.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.ui.touch-punch.js') }}"></script>

        <script src="{{ URL::to('public/js/modernizr.js') }}"></script>

        <script src="{{ URL::to('public/js/bootstrap.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.cookie.js') }}"></script>

        <script src='{{ URL::to('public/js/fullcalendar.min.js') }}'></script>

        <script src='{{ URL::to('public/js/jquery.dataTables.min.js') }}'></script>

        <script src="{{ URL::to('public/js/excanvas.js') }}"></script>
        <script src="{{ URL::to('public/js/jquery.flot.js') }}"></script>
        <script src="{{ URL::to('public/js/jquery.flot.pie.js') }}"></script>
        <script src="{{ URL::to('public/js/jquery.flot.stack.js') }}"></script>
        <script src="{{ URL::to('public/js/jquery.flot.resize.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.chosen.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.uniform.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.cleditor.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.noty.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.elfinder.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.raty.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.iphone.toggle.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.uploadify-3.1.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.gritter.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.imagesloaded.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.masonry.min.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.knob.modified.js') }}"></script>

        <script src="{{ URL::to('public/js/jquery.sparkline.min.js') }}"></script>

        <script src="{{ URL::to('public/js/counter.js') }}"></script>

        <script src="{{ URL::to('public/js/retina.js') }}"></script>

        <script src="{{ URL::to('public/js/custom.js') }}"></script>
        <!-- end: JavaScript-->

    </body>
</html>
