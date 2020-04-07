@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light p-4">
    <div class="row justify-content-center">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">Change password</div>

          <div class="card-body">
            @if (session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            <form method="POST" action="{{ route('changePassword') }}">
              {{ csrf_field() }}

              <div class="form-group row">
                <label for="new-password" class="col-md-4 control-label">Current Password</label>
                <div class="col-md-6">
                  <input id="current-password" type="password"
                    class="form-control @error('current-password') is-invalid @enderror" name="current-password"
                    required>

                  @if ($errors->has('current-password'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('current-password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="new-password" class="col-md-4 control-label">New Password</label>

                <div class="col-md-6">
                  <input id="new-password" type="password"
                    class="form-control @error('new-password') is-invalid @enderror" name="new-password" required>

                  @if ($errors->has('new-password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('new-password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                <div class="col-md-6">
                  <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation"
                    required>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <button type="submit" class="btn btn-green">
                  Change Password
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection