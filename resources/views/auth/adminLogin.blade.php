<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
  <div class="container mt-5">
    @include('message')
    <div class=" row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Đăng nhập') }}</div>
          <div class="card-body">
            <form id="form" method="POST" action="/admin/login">
              @csrf
              <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">
                  {{ __('Tên tài khoản') }}
                </label>
                <div class="col-md-6">
                  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="current-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button id="btnSubmit" type="submit" class="btn btn-primary">
                    {{ __('Đăng nhập') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>