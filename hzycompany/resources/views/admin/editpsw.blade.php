@extends('admin.index')
@section('title')
    查看管理员
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li>管理</li>
            <li>修改密码</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">在这里您可以修改您的密码</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">管理员密码修改</h4>
                    </div>
                    <div class="panel-body panel-form">
                        {{--@if( $errors->has('oldpassword') || $errors->has('password'))--}}
                            {{--<div class="alert alert-danger"><ul><li>{{ $error }}</li></ul></div>--}}
                        {{--@endif--}}
                        <form class="form-horizontal form-bordered" method="post" action="{{route('psweditc')}}" data-parsley-validate="true" name="demo-form">
                            {!! csrf_field() !!}
                            @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                    <div class="alert alert-danger"><ul><li>{{ $error }}</li></ul></div>
                                @endforeach
                                @elseif(Session('msg'))
                                <div class="alert alert-success"><ul><li>修改密码成功</li></ul></div>
                                @endif

                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="password">原始密码* :</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" id="password" name="oldpassword" placeholder="输入旧密码" data-parsley-required="true" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="password">新密码* :</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" id="password" name="password" data-parsley-type="password" placeholder="输入新密码" data-parsley-required="true" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="password">确认密码:</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" id="password" name="password_confirmation" data-parsley-type="password" placeholder="确认新密码" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4"></label>
                                <div class="col-md-6 col-sm-6">
                                    <button type="submit" class="btn btn-primary">修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            App.init();
            TableManageDefault.init();
        });
    </script>
@endsection