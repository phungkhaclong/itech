<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
</head>

<body class="custom-scrollbar">
  <!-- Load Facebook SDK for JavaScript -->
  <div id="app">
    @include('layouts.header')
    @include('layouts.navbar')

    <main class="main">
      @yield('content')
    </main>
    <img class="position-fixed" style="left: 0; top: 140px !important; z-index: 999; cursor: pointer;" src="{{ asset('images/banner/side_banner.jpg') }}"
      alt="side banner" data-toggle="modal" data-target="#regsiterModal">

    <a href="tel:0966622276" class="text-white">
      <div class="position-fixed bg-yellow rounded-circle d-flex justify-content-center align-items-center"
        style="width: 70px; height: 70px; right: 70px; bottom: 11rem; z-index: 99">
        <i class=" far fa-phone-alt fa-2x animated pulse faster"></i>
      </div>
    </a>
    @include('layouts.footer')
    @include('client.chat')
  </div>
  <div class="modal fade" id="regsiterModal" tabindex="-1" role="dialog" aria-labelledby="regsiterModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="regsiterModalLabel">Thông tin liên hệ</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/contact" method="POST">
          @csrf
          <div class="form-group">
            <input type="name" class="form-control" id="name" name="name" placeholder="Họ và tên" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
          </div>
          <div class="form-group">
            <select name="job" id="job" class="form-control">
              <option value="di_hoc">Người đi học</option>
              <option value="di_lam">Người đi làm</option>
            </select>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-green">Gửi thông tin</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="{{ asset('js/lazyload.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>