<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>管理后台-@yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{asset('assets2/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/css/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/css/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/css/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/css/theme/default.css')}}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<link href="{{asset('assets2/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{asset('assets2/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
	<link href="{{asset('assets2/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" />
    <link href="{{asset('assets2/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('assets2/plugins/pace/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span>湖北华之语教育</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('assets2/img/user-13.jpg')}}" alt="" />
							<span class="hidden-xs">{{Session::get('admin.name')}}</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="{{route('pswedit')}}">修改密码</a></li>
							<li><a href="{{route('admin.logout')}}">退出登陆</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="info">
							{{Session::get('admin.name')}}
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">菜单</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret pull-right"></b>
							<i class="fa fa-group "></i>
							<span>学生管理</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="{{url('/admin/stuadd')}}">添加学生账号</a></li>
						    <li><a href="{{url('/admin/stushow')}}">查看学生账号</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-male"></i>
						    <span>管理员管理</span>
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('adminadd')}}">添加管理员</a></li>
							<li><a href="{{route('adminshow')}}">查看管理员</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-bar-chart-o"></i>
						    <span>信息管理</span>
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('infoshow')}}">查看所有学生信息</a></li>
							<li><a href="{{route('jpshow')}}">查看对日语感兴趣的学生</a></li>
						</ul>
					</li>
						</ul>
					</li>
			        <!-- begin sidebar 缩小 button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		@section('content')
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">后台管理界面</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">欢迎您来到 <small>后台管理界面</small></h1>
			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->

				<!-- end col-8 -->
				<!-- begin col-4 -->
				<div class="col-md-4">


					<div class="panel panel-inverse" data-sortable-id="index-10">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">日历</h4>
						</div>
						<div class="panel-body">
							<div id="datepicker-inline" class="datepicker-full-width"><div></div></div>
						</div>
					</div>
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		@show
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('assets2/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="{{asset('assets2/crossbrowserjs/html5shiv.js')}}"></script>
		<script src="{{asset('assets2/crossbrowserjs/respond.min.js')}}"></script>
		<script src="{{asset('assets2/crossbrowserjs/excanvas.min.js')}}"></script>
	<![endif]-->
	<script src="{{asset('assets2/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	{{--<script src="{{asset('assets2/plugins/gritter/js/jquery.gritter.js')}}"></script>--}}
	<script src="{{asset('assets2/plugins/flot/jquery.flot.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/flot/jquery.flot.time.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/flot/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/flot/jquery.flot.pie.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/sparkline/jquery.sparkline.js')}}"></script>
	<script src="{{asset('assets2/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('assets2/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets2/js/dashboard.min.js')}}"></script>
	<script src="{{asset('assets2/js/apps.min.js')}}"></script>
	<script src="{{asset('assets2/js/table-manage-default.demo.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{asset('assets2/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	@section('js')
	<script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
	</script>
		@show
</body>
</html>
