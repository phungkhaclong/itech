@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm học viên</h1>
  </div>

  <div class="row">
    <div class="col">
      <div class="card display-inline">
        <div class="card-body">
          <form id="form" action="/admin/students" method="POST">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="student_id">Mã sinh viên</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('student_id') is-invalid @enderror" id="student_id"
                  name="student_id" value="{{ old('student_id') }}">
                @error('student_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="name">Họ và tên</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                  value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="gender">Giới tính</label>
              <div class="col-sm-10">
                <select class="form-control" id="gender" name="gender">
                  <option value="0">Nam</option>
                  <option value="1">Nữ</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="birthday">Ngày sinh</label>
              <div class="col-sm-10">
                <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday"
                  name="birthday" value="{{ old('birthday') }}">
                @error('birthday')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="address">Địa chỉ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                  name="address" value="{{ old('address') }}">
                @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="email">Địa chỉ email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                  value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="phone">Điện thoại</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                  value="{{ old('phone') }}">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group text-center">
              <a href="/admin/students" class="btn btn-secondary">Huỷ</a>
              <button type="submit" id="btnSubmit" class="btn btn-primary">Tạo</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection