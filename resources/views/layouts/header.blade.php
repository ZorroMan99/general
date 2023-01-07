{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,800" rel="stylesheet">
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>

<body>
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
        <use xlink:href="#bootstrap"></use>
      </svg>
      <img src="{{ asset('img/logo_site.webp') }}">
    </a>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="{{ route('product.index') }}" class="nav-link px-2 link-secondary">ПРОДУКТЫ</a></li>
      <li><a href="{{ route('tariff.index') }}" class="nav-link px-2 link-dark">ТАРИФЫ</a></li>
      <li><a href="{{ route('base.index') }}" class="nav-link px-2 link-dark">БАЗА ЗНАНИЙ</a></li>
      <li><a href="{{ route('support.index') }}" class="nav-link px-2 link-dark">ПОДДЕРЖКА</a></li>
      <li><a href="{{ route('blog.index') }}" class="nav-link px-2 link-dark">БЛОГ</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2">Войти</button>
      {{--        <button type="button" class="btn btn-primary">Зарегистрироваться</button> --}}
    </div>
  </header>
  @yield('content')
</body>

</html>
