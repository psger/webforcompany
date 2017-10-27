<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>华之语</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	

	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/icomoon.css')}}">
	<!-- Bootstrap  -->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css')}}">

	<!-- Modernizr JS -->
		<script src="{{ URL::asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">电话：027-87878236</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<div id="fh5co-logo"><a href="index.html">Study<span>.</span></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li class="active"><a href="{{url('/')}}">首页</a></li>
							<li><a href="{{url('/about')}}">公司介绍</a></li>
							<li><a href="{{url('/Japanese')}}">日语高考</a></li>
							<li><a href="{{url('/questions')}}">问题咨询</a></li>
							<li><a href="{{url('/contact')}}">联系我们</a></li>
							@if (Auth::guest())
								{{--<a href="{{route('login')}}" class="btn-cta">登录</a>--}}
								{{--<a href="{{route('register')}}" class="btn-cta">注册</a>--}}
							@else

								<li class="dropdown">
									<!-- <img class="media-object avatar-112 avatar img-thumbnail" alt="passenger" src="https://dn-phphub.qbox.me/uploads/avatars/16876_1497095210.png?imageView2/1/w/100/h/100"> -->
									<a href="#" class="btn btn-primary" data-toggle="dropdown" role="button" aria-expanded="false">
										{{ Auth::user()->name }}
									</a>

									<ul class="dropdown-menu" role="menu">
										{{--<li>--}}
											{{--<a href="{{ route('') }}"--}}
											   {{--onclick=""><i class="icon icon-profile-male"></i>--}}
												{{--个人主页--}}
											{{--</a>--}}
										{{--</li>--}}
										<li>
											<a href="{{ route('user.show',Auth::user()->id) }}"
											   onclick=""><i class="icon icon-pencil"></i>
												编辑资料
											</a>
										</li>
										<li>
											<a href="{{ route('logout') }}"
											   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-shield"></i>
												退出登录
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>

									</ul>
								</li>
							@endif
							{{--<li class="btn-cta"><a href="#"><span>登录</span></a></li>--}}
							<!-- <li class="btn-cta"><a href="#"><span>Create a Course</span></a></li> -->
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
		@section('content')

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ URL::asset('assets/images/img_bg_1.jpg')}}" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>湖北华之语教育</h1>
							<h2><span><a>日本語を勉強しましょう</a></span></h2>
							@if (Auth::guest())
								<a href="{{route('login')}}" class="btn btn-primary btn-lg btn-learn">学生登录</a>
								<a href="{{route('register')}}" class="btn btn-primary btn-lg btn-learn2">学生注册</a>
							@else

								<div class="">
									<!-- <img class="media-object avatar-112 avatar img-thumbnail" alt="passenger" src="https://dn-phphub.qbox.me/uploads/avatars/16876_1497095210.png?imageView2/1/w/100/h/100"> -->
								<h3><a>欢迎您{{ Auth::user()->name }}</a></h3>
								</div>
							@endif
							<!-- <p><a class="btn btn-primary btn-lg btn-learn" href="#">学生登录</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>学生注册</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="40356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">学生</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="30290" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">课程</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="2039" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">教师</span>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>湖北华之语教育</h2>
					<p>湖北华之语教育诞生于世界一体化对语言要求越来越高的时代，我们承载使命，引领变革，致力于打造域内创新，卓越，一流的日语高考培训学校。</p>
				</div>
			</div>
		</div>		
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<img class="img-responsive" src="{{ URL::asset('assets/images/work_2.png')}}" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h2>我们的优势在哪里</h2>
							<p>我们利用日本专家对日语教学的优势，采取专业资深中教,外教结合授课的模式，利用独特优质的教学资源，在一些高中开设中日双语高考班。至2017年初，我们拥有核心师资50多名，有专业的外教团队，资深的武汉高校教授等中教团队，并且拥有先进的课题研发团队。</p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i>创    新</li>
								<li><i class="icon-check2"></i>卓    越</li>
								<li><i class="icon-check2"></i>一    流</li>
							</ul>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>阅读更多</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-pull-1 animate-box">
						<img class="img-responsive" src="{{ URL::asset('assets/images/work_1.png')}}" alt="work">
					</div>
					<div class="col-md-4 animate-box">
						<div class="mt">
						<h2>日语高考的优势</h2>
							<div>
								<h4><i class="icon-shield"></i>优势一：与汉语最接近</h4>
								
							</div>
							<div>
								<h4><i class="icon-shield"></i>优势二：高考词汇量少</h4>
								<p></p>
							</div>
							<div>
								<h4><i class="icon-shield"></i>优势三：试卷相对简单</h4>
								<p></p>
							</div>
							<div>
								<h4><i class="icon-shield"></i>优势四：成绩提高快</h4>
								<p></p>
							</div>
							<div>
								<h4><i class="icon-shield"></i>优势五：教师团队强大</h4>
								<p></p>
							</div>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>阅读更多</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>家长和学生关心的问题</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('assets/images/project-4.jpg')}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>用日语代替英语高考，满分也是150分吗？</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>日语高考满分为150分，考生所考的日语分数以外语科目成绩直接无折扣记入高考总分。</p>
							<a href="#" class="btn btn-primary">阅读更多</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('assets/images/project-2.jpg')}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>高考日语相对于高考英语容易在哪些地方？</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>首先日语试卷为全国命题，这大大降低了试卷难度。其次，我国目前用日语代替高考的人数很少，再者····</p>
							<a href="#" class="btn btn-primary">阅读更多</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('assets/images/project-3.jpg')}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>对今后大学毕业或者报考研究生有影响吗？</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>我们用日语参加高考的学生，在大学也可以直接用日语等级证书代替英语四级或者六级毕业和考研。</p>
							<a href="#" class="btn btn-primary">阅读更多</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-steps">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>学校关心的问题</h2>
					<p></p>
				</div>
			</div>

			<div class="row bs-wizard animate-box" style="border-bottom:0;">
                
				<div class="col-xs-3 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum"><h4>Q1</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>开设小语种班的意义</p></div>
					<div class="bs-wizard-info text-center"><h4><p>
						给英语成绩欠佳的同学提供了一次从零开始的机会，以日语替代英语高考，拔高高考总分提升竞争优势
					</p></h4></div>
				</div>

				<div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Q2</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>合作办学是否符合国家政策</p></div>
					<div class="bs-wizard-info text-center"><h4><p>复合新课改的要求：为贯彻《中共中央国务院关于深化教育体制改革的决定》，教育部决定大力推进基础教育改革</p></h4></div>
				</div>

				<div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Q3</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>收费是否合法</p></div>
					<div class="bs-wizard-info text-center"><h4><p>符合《国家长期教育改革和发展规划纲要》和《教育信息化十年发展规划》</p></h4></div>
				</div>

			</div>
<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">阅读更多</a></p>
				</div>
		</div>
	</div>


	<div id="fh5co-started" style="background-image:url(assets/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>一起学习日语吧！</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">现在报名</a></p>
				</div>
			</div>
		</div>
	</div>
@show
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>About Learning</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learning</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Grow</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Engage us</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Legal</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 湖北华之语教育科技有限公司<a href="http://www.cssmoban.com/" target="_blank" title="模板之家"></a> - 技术支持 <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">武昌理工学院</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
		<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
		<script src="{{ URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
		<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
		<script src="{{ URL::asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
		<script src="{{ URL::asset('assets/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
		<script src="{{ URL::asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
		<script src="{{ URL::asset('assets/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
		<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/magnific-popup-options.js')}}"></script>
	<!-- Main -->
	<script src="{{ URL::asset('assets/js/main.js')}}"></script>

	</body>
</html>

