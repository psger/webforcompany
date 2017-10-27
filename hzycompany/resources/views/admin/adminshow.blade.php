@extends('admin.index')
@section('title')
    查看管理员
@endsection
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">管理</a></li>
            <li><a href="javascript:;">管理员管理</a></li>
            <li class="active">查看管理员</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">查看所有管理员</h1>
        <!-- end page-header -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">信息显示</h4>
                    </div>
                    <div class="panel-body">
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>昵称</th>
                                <th>邮箱</th>
                                <th>编辑</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $k=>$v)
                                <tr class="@if($k % 2 == 0)odd gradeX @else even gradeC @endif">
                                    <td>{{$k}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->email}}</td>
                                    <td>
                                        <a href="{{url('/admin/admindel',$v->id)}}" onclick="javascript:return del();" title="delete" class="btn btn-sm btn-danger pull-right delete">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

@endsection
@section('js')
    <script>
        //弹出删除提示
        function del() {
            var msg = "您真的确定要删除吗？\n\n请确认！";
            if (confirm(msg)==true){
                return true;
            }else{
                return false;
            }
        }
        $(document).ready(function() {
            App.init();
            TableManageDefault.init();
        });
    </script>
@endsection