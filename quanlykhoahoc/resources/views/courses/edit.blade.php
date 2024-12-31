@extends('courses.master')
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
    <div class="card-header">Sửa khóa học</div>
    <div class="card-body">
        <form action="{{route('courses.update',$course->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$course->id}}"/>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên khóa học</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$course->name}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="{{$course->description}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Độ khó</label>
                <div class="col-sm-10">
                    <select name="difficulty" class="form-control">
                        <option value="" disabled selected>Chọn độ khó</option>
                        <option value="beginner" {{$course->difficulty == 'beginner' ? 'selected' : ''}}>beginner</option>
                        <option value="intermediate" {{$course->difficulty == 'intermediate' ? 'selected' : ''}}>intermediate</option>
                        <option value="advanced" {{$course->difficulty == 'advanced' ? 'selected' : ''}}>advanced</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Giá</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" value="{{$course->price}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Ngày bắt đầu</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="start_date" value="{{$course->start_date}}"/>
                </div>
            </div>
            <div class=" text-center mt-3">
                <a href="{{route('courses.index')}}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Cập nhật"/>
            </div>
        </form>
    </div>
</div>

@endsection('content')