@extends('layouts.app')

@section('content')
<div class="container">
  <div class="p-5 bg-light">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">{{ __('Đăng nhập') }}</div>
          <div class="card-body">
            <form method="POST" action="/login">
              @csrf
              <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label col-form-label-sm text-md-right">
                  {{ __('Mã sinh viên') }}
                </label>
                <div class="col-md-6">
                  <input id="username" type="text"
                    class="form-control form-control-sm @error('username') is-invalid @enderror" name="username"
                    value="{{ old('username') }}" autocomplete="username" autofocus>

                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password"
                  class="col-md-4 col-form-label col-form-label-sm text-md-right">{{ __('Mật khẩu') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password"
                    class="form-control form-control-sm  @error('password') is-invalid @enderror" name="password"
                    autocomplete="current-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-sm btn-green">
                    {{ __('Đăng nhập') }}
                  </button>

                  @if (Route::has('password.request'))
                  <a class="btn btn-sm btn-link" href="{{ route('password.request') }}">
                    {{ __('Quên mật khẩu?') }}
                  </a>
                  @endif
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection