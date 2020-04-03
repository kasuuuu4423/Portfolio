<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <title>YasushiSHIMIZU</title>
    <meta property="og:title" content="YasushiSHIMIZU">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://example.com/images/og-image.jpg">
    <meta property="og:url" content="http://example.com/index.html">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="YasushiSHIMIZU">
    <meta property="og:locale" content="ja">
    <meta property="fb:admins" content="">
    <meta property="fb:app_id" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('icon/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{ asset('icon/apple-touch-icon.ico')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}} ">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162524982-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-162524982-1');
    </script>

  </head>
  <body>
    <div class="back">
      <video src="{{ asset('movie/display(rag)_teaser.mp4')}}" loop muted autoplay></video>
    </div>
    <div class="container">
      <header class="pc-only">
        <nav>
          <ul>
            <li>Art</li>
            <li>
              <ul>
              @foreach($works as $work)
              @if($work->cat == 'Art')
                <li><a class="link-work" data-slug="{{ $work->slug }}">{{$work->name}}</a></li>
              @endif
              @endforeach
              </ul>
            </li>
            <li>Video</li>
            <li>
              <ul>
              @foreach($works as $work)
              @if($work->cat == 'Video')
                <li><a class="link-work" data-slug="{{ $work->slug }}">{{$work->name}}</a></li>
              @endif
              @endforeach
                </ul>
            </li>
            <li>WebSite</li>
            <li>
              <ul>
              @foreach($works as $work)
              @if($work->cat == 'WebSite')
                <li><a class="link-work" data-slug="{{ $work->slug }}">{{$work->name}}</a></li>
              @endif
              @endforeach
              </ul>
            </li>
          </ul>
        </nav>
      </header>
      @yield('content')
      <footer>
        <div class="back-footer"></div>
        <div class="copyright">©2020 YasushiSHIMIZU</div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
      <script src="{{ asset('js/common.js') }}"></script>
      <script src="{{ asset('js/ajax.js') }}"></script>
    </div>
  </body>
</html>
