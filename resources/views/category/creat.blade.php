@extends('layouts.app')

@section('title')
    Thêm mới danh mục bài viết
@endsection

@section('content')
    <form name="submit_category" method="post" action="{{url('/category')}}">
        <div class="form-group">
            <label>First</label>
            <input type="text" name="first" class="form-control" placeholder="Mời bạn  nhập tên">
        </div>
        <div class="form-group">
            <label>Last</label>
            <input type="text" name="last" class="form-control" placeholder="Mời bạn  nhập họ">
        </div>
        <div class="form-group">
            <label>Handle</label>
            <input type="text" name="handle" class="form-control" placeholder="Mời bạn  nhập chức vụ">
        </div>
    </form>