@extends('layouts.app')
@section('content')
<div class="container">
  <div class="bg-light p-4" style="min-height: 40rem">
    <h2 class="text-yellow text-center text-uppercase mb-4">
      @if(Request::is('*/tin-noi-bo')) Tin nội bộ @endif
      @if(Request::is('*/tin-cong-nghe')) Tin công nghệ @endif
      @if(Request::is('*/su-kien')) Sự kiện @endif
      @if(Request::is('*/ky-su-nhat-ban')) Kỹ sư Nhật Bản @endif
      @if(Request::is('*/thuc-tap')) Thực tập tại Nhật Bản @endif
      @if(Request::is('*/du-hoc')) Du học Hàn Quốc @endif
    </h2>
    @if(sizeof($topNews) > 0)
    <div class="row p-2">
      <div class="col-md-6 col-sm-12">
        <div class="card border-0 bg-light">
          <img class="card-img-top" src="/storage/{{$topNews['0']->image ?? ''}}"
            style="height: 17rem; object-fit: cover;">
          <div class="card-body px-0">
            <h5 class="card-title line-clamp-1">
              <a class="text-dark" href="/tin-tuc/{{ $topNews['0']->slug }}">
                {{$topNews['0']->title}}
              </a>
            </h5>
            <p class="card-text line-clamp-2">{{$topNews['0']->description}}</p>
            <p class="card-text">
              <small class="text-muted">
                {{date('d/m/Y', strtotime($topNews['0']->created_at))}}
              </small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="row">
          @if(sizeof($topNews) >= 5)
          @for($i = 1; $i <= 4; $i++) <div class="col-sm-12 col-md-6">
            <div class="card border-0 bg-light">
              <img class="card-img-top" src="/storage/{{$topNews[$i]->image ?? ''}}"
                style="height: 8rem; object-fit: cover;">
              <div class="card-body px-0">
                <h6 class="card-title">
                  <a class="text-dark line-clamp-2" href="/tin-tuc/{{ $topNews[$i]->slug }}">
                    {{$topNews[$i]->title}}
                  </a>
                </h6>
                <p class="card-text">
                  <small class="text-muted">
                    {{date('d/m/Y', strtotime($topNews[$i]->created_at))}}
                  </small>
                </p>
              </div>
            </div>
        </div>
        @endfor
        @else
        @for($i = 1; $i < sizeof($topNews); $i++) <div class="col-sm-12 col-md-6">
          <div class="card border-0 bg-light">
            <img class="card-img-top" src="/storage/{{$topNews[$i]->image ?? ''}}"
              style="height: 8rem; object-fit: cover;">
            <div class="card-body px-0">
              <h6 class="card-title">
                <a class="text-dark line-clamp-2" href="/tin-tuc/{{ $topNews[$i]->slug }}">
                  {{$topNews[$i]->title}}
                </a>
              </h6>
              <p class="card-text">
                <small class="text-muted">
                  {{date('d/m/Y', strtotime($topNews[$i]->created_at))}}
                </small>
              </p>
            </div>
          </div>
      </div>
      @endfor
      @endif
    </div>
    @else
    <h3 class="text-center">Tin tức đang được cập nhật...</h3>
    @endif
  </div>
</div>
<div class="row" id="news-data">
  @include('client.news.data')
</div>
<div class="ajax-load text-center" style="display:none">
  <i class="fas fa-spinner fa-3x fa-spin"></i>
</div>
</div>
</div>
@endsection