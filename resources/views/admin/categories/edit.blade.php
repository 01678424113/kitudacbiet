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
        <!-- Basic Forms -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="card-title">{{$title}}</h3>
                <h6 class="card-subtitle">Nhập thông tin vào các form dưới</h6>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form action="{{route('categories.update',$category->id)}}" method="post">
                            {{ method_field('PUT') }}
                            {{csrf_field()}}
                            <div class="form-group">
                                <h5>Tên danh mục <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" required value="{{$category->name}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Mô tả <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="description" class="form-control" required value="{{$category->description}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Nội dung <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="content_category" class="form-control" required value="{{$category->content}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Tiêu đề <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="title" class="form-control" required value="{{$category->title}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Link <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="url" name="link" class="form-control" required value="{{$category->link}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Trạng thái <span class="text-danger">*</span></h5>
                                <div class="demo-radio-button">
                                    <input name="status" type="radio" {{($category->status == \App\Category::$ACTIVE) ? 'checked' : ''}} value="{{\App\Category::$ACTIVE}}">
                                    <label for="radio_1">Hoạt đông</label>
                                    <input name="group1" type="radio" id="radio_2">
                                    <label for="radio_2">Tạm khóa</label>
                                    <input name="status" type="radio" class="with-gap" {{($category->status == \App\Category::$INACTIVE) ? 'checked' : ''}} value="{{\App\Category::$INACTIVE}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Sắp xếp <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="sort_by" class="form-control" required value="{{$category->sort_by}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Sửa danh mục</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection