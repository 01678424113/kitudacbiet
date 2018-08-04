@extends('admin.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tên
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
                                <th>Tiêu đề</th>
                                <th>Link</th>
                                <th>Sắp xếp</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($names as $name)
                                <tr>
                                    <td>{{$name->name}}</td>
                                    <td>{{$name->title}}</td>
                                    <td><a href="{{$name->link}}">Click</a></td>
                                    <td>{{$name->sort_by}}</td>
                                    <td>
                                        @if($name->status == \App\Name::$ACTIVE)
                                            <label for="" class="label label-success">Hoạt đông</label>
                                        @else
                                            <label for="" class="label label-default">Tạm khóa</label>
                                        @endif
                                    </td>
                                    <td>{{date('Y-m-d',strtotime($name->created_at))}}</td>
                                    <td>
                                        <a href="{{route('names.edit',$name->id)}}"
                                           class="btn btn-info">Sửa</a>
                                    </td>
                                    <td>
                                        <form action="{{route('names.destroy',$name->id)}}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
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
@section('script')
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        } );
    </script>
@endsection
