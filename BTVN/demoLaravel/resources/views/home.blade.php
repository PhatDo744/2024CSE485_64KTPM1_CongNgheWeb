<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Quản lý nội dung</title>
    <style>
        .navbar {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btns {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-4">
        <div class="container-fluid">
            <h3 class="text-dark">Quản lý nội dung</h3>
            <a href="{{route('posts.create')}}" class="btn btn-success ms-auto">Thêm mới</a>
        </div>
    </nav>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $index => $post)
                <tr>
                    <td class="col-1">{{$index+1}}</td>
                    <td class="col-1">{{$post->title}}</td>
                    <td class="col-5">{{$post->content}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-info">Xem chi tiết</a>
                        <div class="btns">
                            <a href="{{route('posts.edit',['post' => $post])}}" class="btn btn-warning">Sửa</a>
                            <a href="{{route('posts.delete',['post' => $post])}}" class="btn btn-danger">Xóa</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>