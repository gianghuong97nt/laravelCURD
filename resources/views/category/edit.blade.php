@extends('layouts.app')

@section('title')
    Sửa danh mục bài viết {{$id}}
@endsection

@section('content')
    <form name="submit_category" method="post" action="{{url('/category/').$id}}">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>