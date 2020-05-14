<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('parts.head')
   @include('parts.script')
</head>
<body>
    @include('sweetalert::alert')
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link" href="{{route('welcome')}}">
            <img src="{{secure_asset('images/sjclogo.png')}}" alt="SJCBI Logo" width="90" height="80">
        </a>
      </li>
    </ul>
    <main>
        @yield('content')
    </main>
    </div>
</body>
</html>
