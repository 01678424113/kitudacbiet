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
                        <form action="{{route('names.update',$name->id)}}" method="post">
                            {{ method_field('PUT') }}
                            {{csrf_field()}}
                            <div class="form-group">
                                <h5>Tên</h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" required value="{{$name->name}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Slug <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="slug" class="form-control" required value="{{$name->slug}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="category_id">
                                    @if(!empty($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{($name->category_id == $category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <h5>Mô tả <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="description" class="form-control" required
                                           value="{{$name->description}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Nội dung <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="content_category" class="form-control" required
                                           value="{{$name->content}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Tiêu đề <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="title" class="form-control" required
                                           value="{{$name->title}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Link <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="url" name="link" class="form-control" required value="{{$name->link}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="form-group">
                                <h5>Trạng thái <span class="text-danger">*</span></h5>
                                <div class="demo-radio-button">
                                    <input name="status" type="radio"
                                           {{($name->status == \App\Name::$ACTIVE) ? 'checked' : ''}} value="{{\App\Name::$ACTIVE}}">
                                    <label for="radio_1">Hoạt đông</label>
                                    <input name="group1" type="radio" id="radio_2">
                                    <label for="radio_2">Tạm khóa</label>
                                    <input name="status" type="radio" class="with-gap"
                                           {{($name->status == \App\Name::$INACTIVE) ? 'checked' : ''}} value="{{\App\Name::$INACTIVE}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Sắp xếp <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="sort_by" class="form-control" required
                                           value="{{$category->sort_by}}"
                                           data-validation-required-message="This field is required"></div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Sửa tên</button>
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