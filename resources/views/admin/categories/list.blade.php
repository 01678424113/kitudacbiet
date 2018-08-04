@extends('admin.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh mục
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">{{$title}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Tiêu đề</th>
                                <th>Sắp xếp</th>
                                <th>Ngày tạo</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->sort_by}}</td>
                                    <td>{{date('Y-m-d',strtotime($category->created_at))}}</td>
                                    <td>
                                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Sửa</a>
                                        <a href="{{route('categories.destroy',$category->id)}}" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
