<?php $slug = $_GET['slug']; ?>

@extends('layouts.dash-common')
@section('content')
<div class="container">
  <div class="row">
    <a class="btn btn-dark" href="{{ asset('/manage') }}">戻る</a>
    <form id="form" class="input-group" method="post" enctype="multipart/form-data" class="input-group row">
      @csrf
        <input type="text" value="{{$slug}}" style="display:none;">
        <input class="btn btn-dark" type="submit" name="submit" value="削除する">
    </form>
  </div>
</div>
@endsection