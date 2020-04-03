<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style_dashboard.css')}}">
</head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-12">DashBoard</h1>
        <div class="col-12">
          <nav>
            <ul>
              <li><a href="{{ asset('/create') }}">Create</a></li>
              <li><a href="{{ asset('/manage') }}">Manage</a></li>
            </ul>
            <a href={{ route('logout') }} onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </nav>
        </div>
      </div>
    </div>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/dash.js') }}"></script>
  </body>
</html>