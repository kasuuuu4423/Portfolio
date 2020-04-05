<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <title>Yasushi SHIMIZU</title>
    <meta property="og:title" content="Yasushi SHIMIZU">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('img/shimizu.jpg') }}">
    <meta property="og:url" content="https://shimizoo.com/">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="Yasushi SHIMIZU">
    <meta property="og:locale" content="ja">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="description" content="清水康志の作品群。">
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
    <script src="https://kit.fontawesome.com/22a502e1f6.js" crossorigin="anonymous"></script>
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
        <div class="pp">
          <a>Privacy Policy</a>
        </div>
        <div class="sns">
          <a href="https://www.facebook.com/yasushi.sihmizoo" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
        </div>
        <div class="contact">
          <a href="mailto:info@shimizoo.com">info@shimizoo.com</a>
        </div>
        <div class="copyright">©2020 YasushiSHIMIZU</div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
      <script src="{{ asset('js/common.js') }}"></script>
      <script src="{{ asset('js/ajax.js') }}"></script>
    </div>
  </body>
</html>
