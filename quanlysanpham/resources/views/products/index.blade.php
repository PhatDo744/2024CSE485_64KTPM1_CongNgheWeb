@extends('products.master')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center">
        <b>Quản lý khóa học</b>
    </h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            {{-- <div class="col col-md-6"><b></b></div> --}}
            <div class="col col-md-12">
                <a href="{{route('products.create')}}" class="btn btn-success btn-sm float-end">Thêm khóa học</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Thể loại</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
            @if(count($products) > 0)
                @foreach($products as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->category}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->stock}}</td>
                        <td>{{$row->supplier_email}}</td>
                        <td>
                            <form action="{{route('products.destroy',$row->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('products.edit',$row->id)}}" class="btn btn-warning btn-sm">Sửa</a>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">Không có dữ liệu</td>
                </tr>
            @endif
        </table>
        <div class="d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection('content')