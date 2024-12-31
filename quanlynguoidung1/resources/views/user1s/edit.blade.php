@extends('user1s.master')
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
    <div class="card-header">Sửa người dùng</div>
    <div class="card-body">
        <form action="{{route('user1s.update',$user1->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$user1->id}}"/>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên người dùng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="{{$user1->username}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="{{$user1->email}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Mật khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="hashed_password" value="{{$user1->hashed_password}}"/>
                </div>
            </div>
            <div class="row">
                <label for="" class="col-sm-2 col-label-form">Vai trò</label>
                <div class="col-sm-10">
                    <select name="role" class="form-control">
                        <option value="" disabled selected>Chọn vai trò</option>
                        <option value="admin" {{$user1->role == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="user" {{$user1->role == 'user' ? 'selected' : ''}}>User</option>
                        <option value="moderator" {{$user1->role == 'moderator' ? 'selected' : ''}}>Moderator</option>
                    </select>
                </div>
            </div>
            <div class=" text-center mt-3">
                <a href="{{route('user1s.index')}}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Cập nhật"/>
            </div>
        </form>
    </div>
</div>

@endsection('content')