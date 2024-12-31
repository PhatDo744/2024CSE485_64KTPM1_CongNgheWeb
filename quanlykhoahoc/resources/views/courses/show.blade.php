@extends('courses.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thông tin khóa học</b></div>
            <div class="col col-md-6">
                <a href="{{route('courses.index')}}" class="btn btn-primary btn-sm float-end">Quay lại</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã khóa học</th>
                <td>{{$course->id}}</td>
            </tr>
            <tr>
                <th>Tên</th>
                <td>{{$course->name}}</td>
            </tr>
            <tr>
                <th>Mô tả</th>
                <td>{{$course->description}}</td>
            </tr>
            <tr>
                <th>Độ khó</th>
                <td>{{$course->difficulty}}</td>
            </tr>
            <tr>
                <th>Giá</th>
                <td>{{$course->price}}</td>
            </tr>
            <tr>
                <th>Ngày bắt đầu</th>
                <td>{{$course->start_date}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection