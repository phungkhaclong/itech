@extends('layouts.app')

@section('content')
<div class="container">
  @include('message')

  <section id="images-slider">
    <a href="#register">
      <img class="d-block w-100" src="{{ asset('images/banner/banner_main.jpg') }}" alt="First slide">
    </a>
  </section>

  <section id="nganh-dao-tao" class="my-3" style="background: #fff">
    <div class="row no-gutters">
      <div class="col-md-3">
        <div class="card border-0">
          <a class="text-white" href="#">
            <img src="{{ asset('images/cntt.jpg') }}" alt="Công nghệ thông tin" width="100%">
            <div class="card-img-overlay d-flex align-items-end">
              <p class="card-text h5 animated faster fadeInUp">CÔNG NGHỆ THÔNG TIN</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-6 p-3">
        <h2 class="text-center">Các Ngành Đào Tạo</h2>
        <p class="text-center" style="font-size: 1.3rem">Chương trình đào tạo của viên I-TECH được thiết kế dựa trên sự
          tham vấn của
          chuyên
          gia,chú trọng thực hành
          , phù hợp với nhu cầu mà nhà tuyển dụng tìm kiếm ở nguồn nhân lực thế hệ mới</p>
      </div>
      <div class="col-md-3">
        <div class="card border-0">
          <a class="text-white" href="#">
            <img src="{{ asset('images/an_toan_thong_tin.jpg') }}" alt="An toàn thông tin" width="100%">
            <div class="card-img-overlay d-flex align-items-end">
              <p class="card-text h5 animated faster fadeInUp">AN TOÀN THÔNG TIN</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-3">
        <div class="card border-0">
          <a class="text-white" href="#">
            <img src="{{ asset('images/lap_trinh_ai.jpg') }}" alt="Du lịch khách sạn" width="100%">
            <div class="card-img-overlay d-flex align-items-end">
              <p class="card-text h5 animated faster fadeInUp">LẬP TRÌNH AI</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-0">
          <a class="text-white" href="#">
            <img src="{{ asset('images/du_lich_khach_san.jpg') }}" alt="Du lịch khách sạn" width="100%">
            <div class="card-img-overlay d-flex align-items-end">
              <p class="card-text h5 animated faster fadeInUp">DU LỊCH KHÁCH SẠN</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-0">
          <img src="{{ asset('images/ngon_ngu.jpg') }}" alt="Ngôn ngữ" width="100%">
          <div class="card-img-overlay d-flex justify-content-end flex-column">
            <p class="card-text h5 animated faster fadeInUp">NGÔN NGỮ</p>
            <div class="d-flex flex-column">
              <a href="#" class="btn btn-sm my-1 text-left card-subtext  animated faster fadeInUp">
                Tiếng Anh
              </a>
              <a href="#" class="btn btn-sm my-1 text-left card-subtext animated faster fadeInUp">
                Tiếng Nhật
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-0">
          <a class="text-white" href="#">
            <img src="{{ asset('images/cong_nghe_oto.jpg') }}" alt="Công nghệ ô tô" width="100%">
            <div class="card-img-overlay d-flex align-items-end">
              <p class="card-text h5 animated faster fadeInUp">CÔNG NGHỆ Ô TÔ</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  @include('client.landing.partials.benefit')

  <section id="images-slider" class="mb-3">
    <h2 class="bg-yellow text-light text-center py-2 m-0 text-uppercase">Hình ảnh về viện đào tạo Quốc Tế I-Tech</h2>
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="3500" data-pause="hover">
      <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
        <li data-target="#carouselIndicators" data-slide-to="3"></li>
        <li data-target="#carouselIndicators" data-slide-to="4"></li>
        <li data-target="#carouselIndicators" data-slide-to="5"></li>
        <li data-target="#carouselIndicators" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('images/introduce/school/school_1.png') }}" alt="school-1">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/introduce/school/school_2.png') }}" alt="school-2">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/introduce/school/school_3.png') }}" alt="school-3">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/introduce/school/school_4.png') }}" alt="school-4">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/introduce/school/school_5.png') }}" alt="school-5">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/introduce/school/school_6.png') }}" alt="school-6">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/introduce/school/school_7.png') }}" alt="school-7">
        </div>
      </div>
    </div>
  </section>

  <section id="environment" class="mb-3">
    <h2 class="bg-yellow text-light text-center py-2 m-0 text-uppercase">Không gian học tập lý tưởng</h2>
    <marquee behavior="alternate" direction="left" scrollamount="6" onmouseover="this.stop();"
      onmouseout="this.start();">
      @for($i = 1; $i
      <=13; $i++) <img src="{{asset('/images/introduce/school/class')}}{{'/'.$i.'.jpg'}}" width="300px" height="220px"
        alt="CCNA" style="margin-left: 7px" />
      @endfor
    </marquee>
  </section>

  <section id="method" class="mb-3">
    <h2 class="bg-yellow text-light text-center py-2 m-0 text-uppercase">
      Bạn đã sẵn sàng để trở thành sinh viên I-Tech
    </h2>
    <div class="row no-gutters bg-green text-center text-white p-4">
      <div class="col-md-4">
        <i class="fal fa-file-edit fa-6x mb-4"></i>
        <h4>Xét học bạ THPT</h4>
      </div>
      <div class="col-md-4">
        <i class="fal fa-file-edit fa-6x mb-4"></i>
        <h4>Xét điểm kỳ thi THPT Quốc gia</h4>
      </div>
      <div class="col-md-4">
        <i class="fal fa-file-edit fa-6x mb-4"></i>
        <h4>Vượt qua kỳ thi Tuyển sinh<br> của viện I-Tech</h4>
      </div>
    </div>
  </section>

  <section id="register" class="mb-4">
    <div class="register-bg py-3 px-4">
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 text-center">             
              <h2 class="font-weight-bold" style="font-size: 28pt; color:white">Lịch khai giảng dự kiến</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Mã lớp</th>
                    <th scope="col">Khai giảng</th>
                    <th scope="col">Lịch học</th>
                    <th scope="col">Thời gian</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">CCNA0220</th>
                    <td>24/02/2020</td>
                    <td>Thứ 2,4,6</td>
                    <td>14:00-16:00</td>
                  </tr>
                  <tr>
                    <th scope="row">CCNA0220</th>
                    <td>24/02/2020</td>
                    <td>Thứ 2,4,6</td>
                    <td>18:30-20:30</td>
                  </tr>
                  <tr>
                    <th scope="row">CCNA0120</th>
                    <td>25/02/2020</td>
                    <td>Thứ 3,5</td>
                    <td>14:00-16:00</td>
                  </tr>
                  <tr>
                    <th scope="row">CCNA0220</th>
                    <td>25/02/2020</td>
                    <td>Thứ 3,5</td>
                    <td>18:30-20:30</td>
                  </tr>
                  <tr>
                    <th scope="row">CCNA0120</th>
                    <td>11/02/2020</td>
                    <td>Thứ 7</td>
                    <td>08:00-10:00  14:00-16:00</td>
                  </tr>
                  <tr>
                    <th scope="row">CCNA0220</th>
                    <td>29/02/2020</td>
                    <td>Chủ nhật</td>
                    <td>08:30-10:00  13-30-15:30</td>
                  </tr>
                </tbody>
              </table>          
            </div>
            <div class="col-md-6">
              <h2 class="font-weight-bold" style="font-size: 25pt;color: #fff;">ĐĂNG KÝ TƯ VẤN TUYỂN SINH</h2>
              <form action="/contact" method="POST">
                @csrf
                <div class="form-group">
                  <input type="name" class="form-control" id="name" name="name" aria-describedby="name"
                    placeholder="Họ và tên">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    aria-describedby="emailHelp" placeholder="Email">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phone"
                    placeholder="Số điện thoại">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option name="hoc" id="hoc">
                      Bạn đang đi học
                    </option>
                    <option name="lam" id="lam">
                      Bạn đang đi làm
                    </option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-green text-uppercase">
                    Đăng ký ngay
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection