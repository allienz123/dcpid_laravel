<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>
    @section('title') Administration @show
  </title>

  <meta name="keywords" content="@yield('keywords')" />
  <meta name="author" content="@yield('author')" />
  <!-- Google will often use this as its description of your page/site. Make it good. -->
  <meta name="description" content="@yield('description')" />

  <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
  <meta name="google-site-verification" content="">

  <!-- Dublin Core Metadata : http://dublincore.org/ -->
  <meta name="DC.title" content="Project Name">
  <meta name="DC.subject" content="@yield('description')">
  <meta name="DC.creator" content="@yield('author')">

  <!--  Mobile Viewport Fix -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- This is the traditional favicon.
	 - size: 16x16 or 32x32
	 - transparency is OK
	 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
  <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

  <!-- iOS favicons. -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
  <link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/wysihtml5/prettify.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/wysihtml5/bootstrap-wysihtml5.css')}}">
  <!-- CSS for Datatables -->
  <!--<link rel="stylesheet" href="{{asset('assets/css/datatables-bootstrap.css')}}">-->
  <!-- CSS untuk kotak form edit/create-->
  <link rel="stylesheet" href="{{asset('assets/css/colorbox.css')}}">
  <!-- custom CSS include datatables, sb admin2 -->
  <link rel="stylesheet" href="{{asset('assets/css/sb-admin-2.css')}}">

	<!-- MetisMenu CSS -->
	<link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet">

	<!-- CSS untuk icon-->
	<link href="{{asset('assets/css/font-awesome-4.3.0 2/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- space beetwen nav top and content -->
  <style>
    body {
      padding: 30px 0;
    }
  </style>

  @yield('styles')

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
  <!-- Container -->
  <div id="wrapper">
    <!--<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">-->
      <!-- Set lebar nav sehingga optimize lebar screen (full width) / use container to fixed size -->
      <div class="container-fluid">
        <!-- Navbar -->
        <div class="navbar navbar-default navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li{{ (Request::is( 'admin') ? ' class="active"' : '') }}>
                  <a href="{{{ URL::to('admin') }}}">
                    <span class="glyphicon glyphicon-home"></span> Home</a>
                  </li>
                  @if (Auth::check()) @if (Auth::user()->hasRole('admin'))
                  <li{{ (Request::is( 'admin/blogs*') ? ' class="active"' : '') }}>
                    <a href="{{{ URL::to('admin/blogs') }}}">
                      <span class="glyphicon glyphicon-list-alt"></span> Blog</a>
                    </li>

                    <li{{ (Request::is( 'admin/comments*') ? ' class="active"' : '') }}>
                      <a href="{{{ URL::to('admin/comments') }}}">
                        <span class="glyphicon glyphicon-bullhorn"></span> Comments</a>
                      </li>
                      <li class="dropdown{{ (Request::is('admin/users*|admin/roles*') ? ' active' : '') }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
                          <span class="glyphicon glyphicon-check"></span> Users
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li{{ (Request::is( 'admin/users*') ? ' class="active"' : '') }}>
                            <a href="{{{ URL::to('admin/users') }}}">
                              <span class="glyphicon glyphicon-user"></span> Manage Users</a>
                      </li>
                      <li{{ (Request::is( 'admin/roles*') ? ' class="active"' : '') }}>
                        <a href="{{{ URL::to('admin/roles') }}}">
                          <span class="glyphicon glyphicon-eye-open"></span> Manage Roles</a>
                        </li>
                        </ul>
                        </li>
                        @endif

              </ul>
              <ul class="nav navbar-nav pull-right">
                <!--<li><a href="{{{ URL::to('/') }}}">View Homepage</a></li>-->
                <li class="divider-vertical"></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-user"></span> Welcome, {{{ strtoupper(Auth::user()->username) }}}
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="{{{ URL::to('user/settings') }}}">
                        <span class="glyphicon glyphicon-wrench"></span> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="{{{ URL::to('user/logout') }}}">
                        <span class="glyphicon glyphicon-share"></span> Logout</a>
                    </li>
                  </ul>
                  @else @endif
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end navbar -->

        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="flot.html">Flot Charts</a>
                  </li>
                  <li>
                    <a href="morris.html">Morris.js Charts</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
              </li>
              <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="panels-wells.html">Panels and Wells</a>
                  </li>
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="notifications.html">Notifications</a>
                  </li>
                  <li>
                    <a href="typography.html">Typography</a>
                  </li>
                  <li>
                    <a href="icons.html"> Icons</a>
                  </li>
                  <li>
                    <a href="grid.html">Grid</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="#">Second Level Item</a>
                  </li>
                  <li>
                    <a href="#">Second Level Item</a>
                  </li>
                  <li>
                    <a href="#">Third Level <span class="fa arrow"></span></a>
                    <ul class="nav nav-third-level">
                      <li>
                        <a href="#">Third Level Item</a>
                      </li>
                      <li>
                        <a href="#">Third Level Item</a>
                      </li>
                      <li>
                        <a href="#">Third Level Item</a>
                      </li>
                      <li>
                        <a href="#">Third Level Item</a>
                      </li>
                    </ul>
                    <!-- /.nav-third-level -->
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="blank.html">Blank Page</a>
                  </li>
                  <li>
                    <a href="login.html">Login Page</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
    <!--</nav>-->

    <!-- /.row -->



    <!-- Notifications -->
    @include('notifications')
    <!-- ./ notifications -->

    <!-- Content -->
    @yield('content')
    <!-- ./ content -->

    <!-- Footer -->
    <footer class="clearfix">
      @yield('footer')
    </footer>
    <!-- ./ Footer -->

    </div>
  </div>
  <!-- ./ container -->

  <!-- Javascripts -->
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/wysihtml5/wysihtml5-0.3.0.js')}}"></script>
  <script src="{{asset('assets/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
  <!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>-->
  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/js/datatables-bootstrap.js')}}"></script>
  <script src="{{asset('assets/js/datatables.fnReloadAjax.js')}}"></script>
  <script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
  <script src="{{asset('assets/js/prettify.js')}}"></script>

	<script src="{{asset('assets/js/sb-admin-2.js')}}"></script>
	<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
	<!--<script src="{{asset('assets/js/jquery-1.11.2.min.js')}}"></script>-->

  <script type="text/javascript">
    $('.wysihtml5').wysihtml5();
    $(prettyPrint);
  </script>

  @yield('scripts')
</body>

</html>
