@extends('layouts.main-common')
@section('content')
<main>
  <div class="wrap grid">
    <section class="profile">
      <figure class="wrap_img" style="background-image: url({{ asset('img/shimizu.jpg') }})"></figure>
      <div class="detail">
        <h1 class="name">清水 康志 / Yasushi SHIMIZU</h1>
        <div class="job">Artist / Engineer / WebDesigner</div>
        <div class="career">
          ProgrammingLang => Arduino / C# - Unity / CSS - SASS(SCSS) / HTML - Pug / JavaScript - jQuery / PHP - Laravel, Selenium, WordPress / Processing / Python - OpenCV<br>
          Software => Abobe - AfterEffect, Illustrator, Photoshop, PremierePro, XD
        </div>
      </div>
    </section>
    @if (isset($works))
    @foreach($works as $work)
    <div id="{{ $work->slug }}" class="work">
      <a class="link-work" data-slug="{{ $work->slug }}"><figure class="wrap_img" style="background-image: url({{ asset('storage/img') }}/{{ $work->img }})"></figure></a>
      <div class="detail">
        <div class="date">{{ $work->period }}</div>
        <h2 class="title"><a data-slug="{{ $work->slug }}" class="link-work">{{ $work->name }}</a></h2>
        <div class="cat">{{ $work->cat }}</div>
        <p class="desc">{{ $work->description }}</p>
      </div>
    </div>
    @endforeach
    @endif
  </div>
  <div class="modal" id="modal">
    <div class="cross"><img src="{{ asset('img/cross.svg') }}"></div>
    <div class="wrap_modal">
      <div class="wrap_video"></div>
      <dl class="wrap_detail">
        <dt>Name: </dt><dd class="title"></dd>
        <dt>Period: </dt><dd class="date"></dd>
        <dt>Category: </dt><dd class="cat"></dd>
        <dt>Description: </dt><dd class="description"></dd>
        <dt>Technology: </dt><dd class="technique"></dd>
      </dl>
    </div>
  </div>
</main>
@endsection
