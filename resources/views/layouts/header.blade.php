<header id="header" class="navbar navbar-expand-md navbar-dark shadow-sm">
  <div class="container">
    <div class="d-flex">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
      </a>
      <form class="d-none d-md-flex form-inline mx-4 navbar__form-search">
        <input class="form-control" type="search" placeholder="Tìm kiếm thông tin..." aria-label="Search">
        {{-- <script async src="https://cse.google.com/cse.js?cx=010412884401131589141:xj2pel0irit"></script>
        <div class="gcse-search"></div> --}}
        <button class="btn btn-success my-2 my-sm-0 navbar__form-search__button" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
    <button class="navbar-toggler border-0 text-white" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        {{-- <li class="nav-item">
          <a class="nav-link text-white" href="/login">
            {{ __('Đăng nhập') }}
          </a>
        </li> --}}
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->username }} - {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right animated faster fadeIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Đăng xuất') }}
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/changePassword">Đổi mật khẩu</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</header>