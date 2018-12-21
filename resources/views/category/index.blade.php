@extends('layouts.app')

@section('title')
    Danh sách danh mục bài viết
@endsection

@section('content')
<h2>
    <a href="{{url('/category/create')}}" class="btn btn-info">Thêm danh mục bài viêt</a>
</h2>

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a href="{{url('/category/1/edit')}}" class="btn btn-warning">Sửa</a>
            <a href="{{url('/category/1/delete')}}" class="btn btn-danger">Xóa</a>
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a href="{{url('/category/2/edit')}}" class="btn btn-warning">Sửa</a>
            <a href="{{url('/category/2/delete')}}" class="btn btn-danger">Xóa</a>
        </td>
    </tr>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a href="{{url('/category/3/edit')}}" class="btn btn-warning">Sửa</a>
            <a href="{{url('/category/3/delete')}}" class="btn btn-danger">Xóa</a>
        </td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a href="{{url('/category/4/edit')}}" class="btn btn-warning">Sửa</a>
            <a href="{{url('/category/4/delete')}}" class="btn btn-danger">Xóa</a>
        </td>
    </tr>
    </tbody>
</table>
@endsection