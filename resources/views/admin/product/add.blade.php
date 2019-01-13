@extends('layouts.admin.master')
@section('title', 'Thêm mới sản phẩm')
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Tên sp">
                </div>

                <div class="form-group">
                    <label for="">Danh mục <span class="text-danger">*</span></label>
                    <select name="cate_id" class="form-control">
                        @foreach ($cates as $c)
                        <option value="{{$c->id}}">{{$c->cate_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá bán <span class="text-danger">*</span></label>
                    <input type="number" name="price" class="form-control" placeholder="Giá sp">
                </div>
                <div class="form-group">
                    <label for="">Số lượng views </label>
                    <input type="number" name="views" class="form-control" placeholder="Số lượt xem" value="0">
                </div>
                <div class="form-group">
                    <label for="">Sao đánh giá </label>
                    <input type="number" name="star" class="form-control" placeholder="Sao đánh giá" value="5">
                </div>
            </div>
            <div class="col-md-6">
                <div class="preview-img">
                    <img src="{{asset('images/default-image.png')}}" class="img-responsive">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" >
                </div>
            </div>
        </div>
    </form>

@endsection
@section('customjs')
    
@endsection