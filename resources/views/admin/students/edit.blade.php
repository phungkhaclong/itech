@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cập nhật thông tin học viên</h1>
  </div>

  <div class="row">
    <div class="col">
      <div class="card display-inline">
        <div class="card-body">
          <form id="form" action="/admin/students/{{$user->student_id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="student_id">Mã sinh viên</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="student_id" id="student_id" value="{{ $user->student_id}}"
                  disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="name">Họ và tên</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                  value="{{old('name', $user->name)}}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="birthday">Ngày sinh</label>
              <div class="col-sm-10">
                <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday"
                  name="birthday" value="{{ old('birthday', $user->birthday) }}">
                @error('birthday')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Giới tính</label>
              <div class="col-sm-10">
                <select class="form-control" name="gender" id="gender">
                  <option value="0" @if($user->gender == '0') checked @endif>Nam</option>
                  <option value="1" @if($user->gender == '1') checked @endif>Nữ</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="email">Địa chỉ email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                  value="{{old('email', $user->email)}}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{$errors->first('email')}}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="phone">Điện thoại</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                  value="{{old('phone', $user->phone)}}">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group text-center">
              <a href="/admin/students" class="btn btn-secondary">Huỷ</a>
              <button type="submit" id="btnSubmit" class="btn btn-success">Cập nhật</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection