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
    <div class="card-header">Sửa sản phẩm</div>
    <div class="card-body">
        <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$product->id}}"/>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$product->name}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Thể loại</label>
                <div class="col-sm-10">
                    <select name="category" class="form-control">
                        <option value="" disabled selected>Chọn thể loại</option>
                        <option value="Mouse" {{$product->category == 'Mouse' ? 'selected' : ''}}>Mouse</option>
                        <option value="Keyboard" {{$product->category == 'Keyboard' ? 'selected' : ''}}>Keyboard</option>
                        <option value="Headset" {{$product->category == 'Headset' ? 'selected' : ''}}>Headset</option>
                        <option value="Monitor" {{$product->category == 'Monitor' ? 'selected' : ''}}>Monitor</option>
                    </select>
                </div>
            <div class="row mt-3 mb-3">
                <label for="" class="col-sm-2 col-label-form">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="{{$product->description}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Giá</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" value="{{$product->price}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Số lượng</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="stock" value="{{$product->stock}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="supplier_email" value="{{$product->supplier_email}}"/>
                </div>
            </div>
            <div class=" text-center mt-3">
                <a href="{{route('products.index')}}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Cập nhật"/>
            </div>
        </form>
    </div>
</div>

@endsection('content')