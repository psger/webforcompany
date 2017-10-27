@extends('admin.index')
@section('title')
    添加管理员
@endsection
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">管理</a></li>
            <li><a href="javascript:;">管理员管理</a></li>
            <li class="active">添加管理员</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">在这里添加新的管理员</h1>
        <!-- end page-header -->

        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->

            <!-- end col-6 -->
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-4">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">请勿添加相同的用户名</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{route('adminaddt')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            {!! csrf_field() !!}
                            <fieldset>
                                <legend>添加</legend>
                                @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                        {{--<li>{{ $error }}</li>--}}
                                    @endforeach
                                @endif
                                @if( $errors->has('name') || $errors->has('email')||$errors->has('password'))
                                    <div class="alert alert-danger"><ul><li>{{ $error }}</li></ul></div>
                                @endif
                                @if(Session::has('flash_success2'))
                                    <div class="alert alert-success"><ul><li>{{ Session::get('flash_success2') }}</li></ul></div>
                                @endif
                                <div class="form-group">
                                    <label class="col-md-4 control-label">用户名</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" placeholder="输入用户名" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">邮箱</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" placeholder="输入邮箱" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">密码</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password" placeholder="输入密码" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <div class="checkbox">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-sm btn-primary m-r-5">确认</button>
                                        <button type="reset" class="btn btn-sm btn-default">取消</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
        <!-- begin row -->

        <!-- end row -->
    </div>
    <!-- end #content -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            App.init();
            TableManageDefault.init();
        });
    </script>
@endsection