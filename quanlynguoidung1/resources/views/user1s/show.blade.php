@extends('user1s.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thông tin người dùng</b></div>
            <div class="col col-md-6">
                <a href="{{route('user1s.index')}}" class="btn btn-primary btn-sm float-end">Quay lại</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã người dùng</th>
                <td>{{$user1->id}}</td>
            </tr>
            <tr>
                <th>Tên</th>
                <td>{{$user1->username}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$user1->email}}</td>
            </tr>
            <tr>
                <th>Quyền</th>
                <td>{{$user1->role}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection