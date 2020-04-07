@extends('layouts.app')
@section('content')
<div class="container" style="min-height: 45rem">
  @include('message')
  <div class="bg-light p-4">
    <h1 class="text-uppercase text-center">Liên hệ</h1>
    <p class="text-center">Vui lòng điền vào mẫu tin bên dưới và gửi những góp ý, thắc mắc đến
      <span class="text-uppercase">viện đào tạo cntt quốc tế i-tech</span>
    </p>
    <div class="row justify-content-center mt-5">
      <div class="col-md-7 col-sm-12">
        <div class="bg-white rounded p-3">
          <form id="form" action="/contact" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Họ và tên *</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email *</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="phone">Số điện thoại *</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="room">Bộ phận liên hệ *</label>
                <input type="text" class="form-control" id="room" name="room">
              </div>
            </div>
            <div class="form-group">
              <label for="title">Tiêu đề</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label for="content">Nội dung</label>
              <textarea type="text" class="form-control" id="content" name="content" rows="5"></textarea>
            </div>
            <div class="text-center">
              <button id="btnSubmit" type="submit" class="btn bg-yellow text-white px-5">Gửi</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="d-none d-md-block bg-white rounded p-3">
          <p class="h5 text-uppercase text-center text-green mb-3">viện đào tạo cntt quốc tế i-tech</p>
          <p>
            <i class="fas fa-map-marker-alt text-green mr-2"></i>
            <span class="h6 font-weight-normal">P301, Nhà C, 290 Tây Sơn - Đống Đa - Hà Nội</span>
          </p>
          <p>
            <i class="fas fa-phone-alt text-green mr-2"></i>
            <span class="h6 font-weight-normal">09666.222.76 - 024.666.222.76</span>
          </p>
          <p>
            <i class="fas fa-envelope text-green mr-2"></i>
            <span class="h6 font-weight-normal">info@i-tech.edu.vn</span>
          </p>
          <p>
            <i class="fas fa-globe text-green mr-2"></i>
            <span class="h6 font-weight-normal">
              <a class="text-dark" href="http://i-tech.edu.vn/">www.i-tech.edu.vn</a>
            </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection