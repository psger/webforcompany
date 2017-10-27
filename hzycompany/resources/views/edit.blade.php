@extends('index')
@section('content')
 	<div id="fh5co-started" style="background-image:url({{asset('assets/images/img_bg_2.jpg')}});">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">{{$user->name}}</a></p>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">

					<h3>编辑您的个人信息</h3>
				@if(count($errors)>0)
								@foreach($errors->all() as $error)
									{{--<li>{{ $error }}</li>--}}
								@endforeach
				@endif
				@if( $errors->has('real_name') || $errors->has('email'))
					<div class="alert alert-danger"><ul><li>{{ $error }}</li></ul></div>
				@endif
				@if(Session::has('flash_message'))
					<div class="alert alert-success"><ul><li>{{ Session::get('flash_message') }}</li></ul></div>
				@endif

					<div class="panel panel-default padding-md">
	<div class="panel-body ">
		<form class="form-horizontal" method="POST" action="{{ route('user.edit' ,$user->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
			<input name="_method" type="hidden" value="PATCH">
			{!! csrf_field() !!}
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					性别
				</label>
				<div class="col-sm-6">
					<select class="form-control" name="sex">
						<option value="unselected" {{ $user->sex == 'unselected' ? 'selected' : '' }}>未选择</option>
						<option value="male" {{ $user->sex == 'male' ? 'selected' : '' }}>男</option>
						<option value="female" {{ $user->sex == 'female' ? 'selected' : '' }}>女</option>
					</select>
				</div>
				
				<div class="col-sm-4 help-block">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					昵称
				</label>
				<div class="col-sm-6">
					<input class="form-control" name="name" type="text" value="{{ $user->name }}">
				</div>
				<div class="col-sm-4 help-block">
					如：李小明
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					真实姓名
				</label>
				<div class="col-sm-6">
					<input class="form-control" name="real_name" type="text" value="{{ $user->real_name }}">
				</div>
				<div class="col-sm-4 help-block">
					如：王小红
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					邮 箱
				</label>
				<div class="col-sm-6">
					<input class="form-control" name="email" type="email" value="{{ $user->email }}">
				</div>
				<div class="col-sm-4 help-block">
					如：name@website.com
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					年级
				</label>
				<div class="col-sm-6">
					<input class="form-control" name="grade" type="text" value="{{ $user->grade }}">
				</div>
				<div class="col-sm-4 help-block">
					如：高二
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					学校
				</label>
				<div class="col-sm-6">
					<input class="form-control" name="school" type="text" value="{{ $user->school }}">
				</div>
				<div class="col-sm-4 help-block">
					如：武汉市第一高级中学
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					电话
				</label>
				<div class="col-sm-6">
					<input class="form-control" name="tell" type="text" value="{{ $user->tell }}">
				</div>
				<div class="col-sm-4 help-block">
					如：18273625512
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					QQ
				</label>
				<div class="col-sm-6">
					<input class="form-control" name="qq" type="text" value="{{ $user->qq }}">
				</div>
				<div class="col-sm-4 help-block">
					如：123456
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">
					对日语是否感兴趣
				</label>
				<div class="col-sm-6">
					<select class="form-control" name="interest">
						<option value="unselected" {{ $user->interest == 'unselected' ? 'selected' : '' }} >未选择</option>
						<option value="1" {{ $user->interest == '1' ? 'selected' : '' }}>是</option>
						<option value="0" {{ $user->interest == '0' ? 'selected' : '' }}>否</option>
					</select>
				</div>
				
				<div class="col-sm-4 help-block">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-6">
					<input class="btn btn-primary" id="user-edit-submit" type="submit" value="应用修改">
				</div>
			</div>
		</form>
	</div>
</div>



				<h3>修改密码</h3>
				@if( $errors->has('oldpassword') || $errors->has('password'))
					<div class="alert alert-danger"><ul><li>{{ $error }}</li></ul></div>
				@endif
				@if(Session::has('flash_message2'))
					<div class="alert alert-danger"><ul><li>{{ Session::get('flash_message2') }}</li></ul></div>
				@endif
				<div class="panel panel-default padding-md">
				<div class="panel-body ">
					<form class="form-horizontal" method="POST" action="{{route('pswedits')}}" accept-charset="UTF-8" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">
								原始密码：
							</label>
							<div class="col-sm-6">
								<input class="form-control" name="oldpassword" type="password" autocomplete="off" value="">
							</div>
							<div class="col-sm-4 help-block">

							</div>
						</div>
							<div class="form-group">
							<label for="" class="col-sm-2 control-label">
								新密码：
							</label>
							<div class="col-sm-6">
								<input class="form-control" name="password" type="password" autocomplete="off" value="">
							</div>
							<div class="col-sm-4 help-block">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">
								确认密码：
							</label>
							<div class="col-sm-6">
								<input class="form-control" name="password_confirmation" type="password" autocomplete="off" value="">
							</div>
							<div class="col-sm-4 help-block">

							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-6">
								<input class="btn btn-primary" id="user-edit-submit" type="submit" value="应用修改">
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection
