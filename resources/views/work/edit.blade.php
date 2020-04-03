@extends('layouts.dash-common')
<?php
foreach($works as $work){
  if($work->slug == $_GET['slug']){
    break;
  }
}
?>
@section('content')
<div class="container">
  <div class="row">
    <h2 class="col-12">Edit</h2>
    <form id="form-edit" class="input-group" method="post" enctype="multipart/form-data" class="input-group row">
      @csrf
      <label class="col-lg-4">
        <span class="slug">Slug</span><input value="{{$work->slug}}" placeholder="slug012" name="slug" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">
      </label>
      <label class="col-lg-4">
        <span class="url">ID of YouTube Video</span><input value="{{$work->url}}" name="url" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">
      </label>
      <label class="col-lg-4">
        <span class="cat">Category</span><input value="{{$work->cat}}" name="cat" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">
      </label>
      <label class="col-lg-4">
        <span class="name">Name</span><input value="{{$work->name}}" name="name" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">
      </label>
      <label class="col-lg-4">
        <span class="period">Period</span><input value="{{$work->period}}" name="period" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">
      </label>
      <label class="col-lg-4">
        <span class="link">link</span><input value="{{$work->link}}" name="link" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">
      </label>
      <label class="col-lg-6">
        <span class="description">Description</span><textarea name="description" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">{{$work->description}}</textarea>
      </label>
      <label class="col-lg-6">
        <span class="technique">Technology</span><textarea name="technique" type="text" class="form-control" aria-describedby="inputGroup-sizing-default">{{$work->technique}}</textarea>
      </label>
      <label class="col-lg-6 input-group-btn">
        <span class="btn btn-outline-dark">Choose Image<input class="file" type="file" name="image" style="display:none"></span>
      <input class="w-75 filename" type="text" class="form-control" readonly="">
      </label>
      <div class="col-lg-6"><span>Current Image</span><img class="w-100" src="{{ asset('storage/img') }}/{{ $work->img }}" alt=""></div>
      <div class="col-2 wrap-btn">
        <input class="btn btn-dark" type="submit" name="submit" action="control.php" value="登録" class=" w-100 button">
      </div>
    </form>
  </div>
</div>
@endsection