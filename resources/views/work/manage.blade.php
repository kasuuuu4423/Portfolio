@extends('layouts.dash-common')
@section('content')
<div class="container">
  <div class="row">
    <h2 class="col-12">Manage</h2>
    <div class="wrap_tbl col-12 mb-5">
      <table border="1">
        <tr class="f-row"><th>Slug</th><th>Name</th><th>Period</th><th>Description</th><th>Technology used</th><th>YouTube ID</th><th>Link</th><th>Image</th><th></th></tr>
        @if (isset($works))
        @foreach($works as $work)
        <tr>
          <th>{{$work->slug}}</th>
          <th>{{$work->name}}</th>
          <th>{{$work->period}}</th>
          <th>{{$work->description}}</th>
          <th>{{$work->technique}}</th>
          <th>{{$work->url}}</th>
          <th>{{$work->link}}</th>
          <th><img class="w-100" src="{{ asset('storage/img') }}/{{ $work->img }}" alt=""></th>
          <th>
            <div><a href="{{ asset('/edit') }}?slug={{ $work->slug }}">Edit</a></div>
            <div><a href="{{ asset('/delete') }}?slug={{ $work->slug }}">Delete</a></div>
          </th>
        </tr>
        @endforeach
        @endif
      </table>
    </div>
  </div>
</div>
@endsection
