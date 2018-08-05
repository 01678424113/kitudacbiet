@extends('admin.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bình luận
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
                                <th>Nội dung</th>
                                <th>Like</th>
                                <th>Dislike</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->comment}}</td>
                                    <td>{{$comment->like}}</td>
                                    <td>{{$comment->dislike}}</td>
                                    <td>
                                        @if($comment->status == \App\Comment::$ACTIVE)
                                            <form action="{{route('comments.update',$comment->id)}}" method="post">
                                                {{ method_field('PUT') }}
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-success">Hiện</button>
                                            </form>
                                        @else
                                            <form action="{{route('comments.update',$comment->id)}}" method="post">
                                                {{ method_field('PUT') }}
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-default">Ẩn</button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>{{date('Y-m-d',strtotime($comment->created_at))}}</td>
                                    <td>
                                        <a href="{{route('comments.edit',$comment->id)}}"
                                           class="btn btn-info">Sửa</a>
                                    </td>
                                    <td>
                                        <form action="{{route('comments.destroy',$comment->id)}}" method="post">
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
