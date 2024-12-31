@extends('products.master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card">
    <div class="card-header">Thêm sản phẩm</div>
    <div class="card-body">
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Thể loại</label>
                <div class="col-sm-10">
                    <select name="category" class="form-control">
                        <option value="" disabled selected>Chọn thể loại</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="Headset">Headset</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Giá</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="price"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Số lượng</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="stock"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="supplier_email"/>
                </div>
            </div>
            <div class=" text-center mt-3">
                <a href="{{route('products.index')}}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Thêm"/>
            </div>
        </form>
    </div>
</div>
@endsection('content')