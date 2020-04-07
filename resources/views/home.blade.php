@extends('layouts.app')

@section('content')
<div class="container">
  @include('message')

  <section id="images-slider">
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="3500" data-pause="hover">
      <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
        <li data-target="#carouselIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('images/banner/banner_main.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/banner/banner_khachsan.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/banner/banner_ngoaingu.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/banner/banner_oto.jpg') }}" alt="Third slide">
        </div>
      </div>
    </div>
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

  <section id="banner-intro" class="mb-3">
    <div class="row">
      <div class="col-12">
        <img src="{{ asset('images/theo_hoc_tai_itech.jpg')}}" alt="Theo hoc tai itech" width="100%">
      </div>
    </div>
  </section>

  <section id="tuyen-sinh" class="bg-light">
    <div class="row" style="padding: 0 1rem;">
      <div class="col-lg-6 col-md-12 my-3">
        <h2>TUYỂN SINH</h2>
        <div class="card border-0 mb-3">
          <img class="card-img-top" src="/storage/{{ $admissionNews->image ?? '' }}" alt="Tuyển sinh" height="300">
          <div class="card-body bg-light px-0">
            <h5 class="card-title line-clamp-1">
              <a class="text-dark" href="/tin-tuc/{{ $admissionNews->slug ?? '' }}">
                {{ $admissionNews->title ?? '' }}
              </a>
            </h5>
            <p class="card-text line-clamp-4">{{ $admissionNews->description ?? '' }}</p>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <a href="/tin-tuc" class="btn btn-outline-warning">XEM TẤT CẢ
            <i class="fas fa-angle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 my-3">
        <h2>CÂU HỎI</h2>
        <div class="custom-scrollbar" style="max-height: 470px; overflow: auto">
          <ul class="list-group">
            @for ($i = 0; $i < sizeof($questions); $i++) <li class="list-group-item">
              <a class="text-dark" href="{{ route('hoi_dap') }}">
                {{$i+1}}. {{$questions[$i]}}
              </a>
              </li>
              @endfor
          </ul>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <a href="#" class="btn btn-outline-success">XEM TẤT CẢ
            <i class="fas fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="features" class="my-3">
    <div class="row px-3">
      <div class="col-lg p-3 bg-light hover-green ">
        <a href="{{ route('test') }}" class="feature-item">
          <div class="d-flex justify-content-center align-items-center flex-column">
            <i class="far fa-ballot-check fa-3x my-2 hover-white text-green hover-white"></i>
            <p class="text-center hover-white">BÀI TEST CHỌN NGÀNH NGHỀ</p>
          </div>
        </a>
      </div>
      <div class="col-lg p-3 bg-green hover-green">
        <a href="#" class="feature-item" data-toggle="modal" data-target="#regsiterModal">
          <div class="d-flex justify-content-center align-items-center flex-column text-white">
            <i class="fas fa-pencil-alt fa-3x my-2 hover-white"></i>
            <p class="text-center hover-white">ĐĂNG KÝ TƯ VẤN</p>
          </div>
        </a>
      </div>
      <div class="col-lg p-3 bg-light hover-green">
        <a href="#" class="feature-item">
          <div class="d-flex justify-content-center align-items-center flex-column">
            <i class="fas fa-search fa-3x my-2  text-green hover-white"></i>
            <p class="text-center hover-white">TRA CỨU</p>
          </div>
        </a>
      </div>
      <div class="col-lg p-3 bg-green hover-green">
        <a href="{{ route('hoc_phi_hoc_bong') }}" class="feature-item">
          <div class="d-flex justify-content-center align-items-center flex-column text-white">
            <i class="fas fa-gift fa-3x my-2 hover-white"></i>
            <p class="text-center hover-white">HỌC BỔNG</p>
          </div>
        </a>
      </div>
      <div class="col-lg p-3 bg-light hover-green">
        <a href="#" class="feature-item" data-toggle="modal" data-target="#regsiterModal">
          <div class="d-flex justify-content-center align-items-center flex-column">
            <i class="fas fa-tv fa-3x my-2 text-green hover-white"></i>
            <p class="text-center hover-white">ĐĂNG KÝ DỰ TUYỂN ONLINE</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section id="news" class="my-3 bg-light">
    <h2 class="mx-3 pt-3 text-center">Tin Tức</h2>
    <div class="row" style="padding: 0 1rem">
      @if($news)
      <div class="col-lg-6 col-md-12 my-3">
        <div class="card border-0 mb-3">
          <img class="card-img-top" src="/storage/{{$news['0']->image ?? ''}}" alt="Card image cap" height="100%">
          <div class="card-body bg-light px-0">
            <a class="text-dark" href="/tin-tuc/{{$news['0']->slug ?? ''}}">
              <h5 class="card-title line-clamp-1">
                {{$news['0']->title ?? ''}}
              </h5>
            </a>
            <p class="card-text line-clamp-3">
              {{$news['0']->description ?? ''}}
            </p>
          </div>
        </div>
      </div>
      @endif
      <div class="col-lg-6 col-md-12 my-3">
        <div class="custom-scrollbar" style="max-height: 500px; overflow: auto">
          @if($news)
          @for($i = 1; $i < sizeof($news); $i++) <div class="card border-0 mb-3">
            <div class="row no-gutters">
              <div class="col-md-4" style="height: 100px">
                <img src="/storage/{{$news[$i]->image}}" class="card-img" alt="..." style="height: 100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a class="text-dark" href="/tin-tuc/{{$news[$i]->slug}}">
                    <h5 class="card-title text-truncate">{{$news[$i]->title}}</h5>
                  </a>
                  <p class=" card-text line-clamp-3">{{$news[$i]->description}}</p>
                </div>
              </div>
            </div>
        </div>
        @endfor
        @endif
      </div>
    </div>
</div>
<div class="d-flex justify-content-center py-3">
  <a href="/tin-tuc" class="btn btn-outline-warning">
    <span>XEM THÊM</span>
    <i class="fas fa-angle-right"></i>
  </a>
</div>
</section>
<section id="environment" class="mb-3">
  <h2 class="bg-yellow text-light text-center py-2 m-0 text-uppercase">Không gian học tập lý tưởng</h2>
  <marquee behavior="alternate" direction="left" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();">
    @for($i = 1; $i
    <=16; $i++) <img src="{{asset('/images/slider/home')}}{{'/'.$i.'.jpg'}}" width="300px" height="220px" alt="#"
      style="margin-left: 7px" />
    @endfor
  </marquee>
</section>
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
@endsection