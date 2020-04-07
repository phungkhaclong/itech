@extends('layouts.app')

@section('content')
<div class="container">
  <section id="banner">
    <img class="d-block w-100" src="{{ asset('images/hoinhap/bannerhnqt.jpg') }}" alt="banner">
  </section>
  <section id="news" class="my-3 bg-light">
    <h2 class="p-3 bg-yellow ">
      <a class="text-white" href="{{ route('ky_su_nhat_ban') }}">Kỹ sư nhật bản</a>
    </h2>
    <div class="row" style="padding: 0 1rem">
      @if($kySuNhatBanNews)
      <div class="col-lg-6 col-md-12 my-3">
        <div class="card border-0 mb-3">
          <img class="card-img-top" src="/storage/{{ $kySuNhatBanNews['0']->image ?? '' }}" alt="Card image cap" style="height: 18rem; object-fit: cover;">
          <div class="card-body bg-light px-0">
            <a class="text-dark" href="/tin-tuc/{{ $kySuNhatBanNews['0']->slug ?? '' }}">
              <h5 class="card-title line-clamp-1">
                {{ $kySuNhatBanNews['0']->title ?? '' }}
              </h5>
            </a>
            <p class="card-text line-clamp-3">
              {{ $kySuNhatBanNews['0']->description ?? '' }}
            </p>
          </div>
        </div>
      </div>
      @endif
      <div class="col-lg-6 col-md-12 my-3">
        <div class="custom-scrollbar" style="max-height: 500px; overflow: auto">
          @if($kySuNhatBanNews)
          @for($i = 1; $i < sizeof($kySuNhatBanNews); $i++) 
          <div class="card border-0 mb-3">
            <div class="row no-gutters">
              <div class="col-md-4" style="height: 7rem">
                <img src="/storage/{{ $kySuNhatBanNews[$i]->image }}" class="card-img" style="height: 100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a class="text-dark" href="/tin-tuc/{{ $kySuNhatBanNews[$i]->slug }}">
                    <h5 class="card-title text-truncate">{{ $kySuNhatBanNews[$i]->title }}</h5>
                  </a>
                  <p class=" card-text line-clamp-3">{{ $kySuNhatBanNews[$i]->description }}</p>
                </div>
              </div>
            </div>
        </div>
        @endfor
        @endif
      </div>
    </div>
</div>
</section>
<section id="news" class="my-3 bg-light">
  <h2 class="p-3 bg-yellow ">
  <a class="text-white" href="{{ route('thuc_tap') }}">Sinh viên thực tập tại Nhật Bản</a>
  </h2>
  <div class="row" style="padding: 0 1rem">
    @if($thucTapNhatBanNews)
    <div class="col-lg-6 col-md-12 my-3">
      <div class="card border-0 mb-3">
        <img class="card-img-top" src="/storage/{{ $thucTapNhatBanNews['0']->image ?? '' }}" alt="Card image cap" style="height: 18rem; object-fit: cover;">
        <div class="card-body bg-light px-0">
          <a class="text-dark" href="/tin-tuc/{{ $thucTapNhatBanNews['0']->slug ?? '' }}">
            <h5 class="card-title line-clamp-1">
              {{ $thucTapNhatBanNews['0']->title ?? '' }}
            </h5>
          </a>
          <p class="card-text line-clamp-3">
            {{ $thucTapNhatBanNews['0']->description ?? '' }} 
          </p>
        </div>
      </div>
    </div>
    @endif
    <div class="col-lg-6 col-md-12 my-3">
      <div class="custom-scrollbar" style="max-height: 500px; overflow: auto">
        @if($thucTapNhatBanNews)
        @for($i = 1; $i < sizeof($thucTapNhatBanNews); $i++) 
        <div class="card border-0 mb-3">
          <div class="row no-gutters">
            <div class="col-md-4" style="height: 7rem">
            <img src="/storage/{{ $thucTapNhatBanNews[$i]->image }}" class="card-img" height="100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a class="text-dark" href="/tin-tuc/{{ $thucTapNhatBanNews[$i]->slug }}">
                  <h5 class="card-title text-truncate">{{ $thucTapNhatBanNews[$i]->title }}</h5>
                </a>
                <p class=" card-text line-clamp-3">{{ $thucTapNhatBanNews[$i]->description }}</p>
              </div>
            </div>
          </div>
      </div>
      @endfor
      @endif
    </div>
  </div>
</div>
</section>
<section id="news" class="my-3 bg-light">
  <h2 class="p-3 bg-yellow">
    <a class="text-white" href="{{ route('du_hoc') }}">Du học Hàn Quốc</a>
  </h2>
  <div class="row" style="padding: 0 1rem">
    @if($duHocHanQuocNews)
    <div class="col-lg-6 col-md-12 my-3">
      <div class="card border-0 mb-3">
        <img class="card-img-top" src="/storage/{{ $duHocHanQuocNews['0']->image ?? '' }}" alt="Card image cap" style="height: 18rem; object-fit: cover;">
        <div class="card-body bg-light px-0">
          <a class="text-dark" href="/tin-tuc/{{ $duHocHanQuocNews['0']->slug ?? '' }}">
            <h5 class="card-title line-clamp-1">
              {{ $duHocHanQuocNews['0']->title ?? '' }}
            </h5>
          </a>
          <p class="card-text line-clamp-3">
            {{ $duHocHanQuocNews['0']->description ?? '' }} 
          </p>
        </div>
      </div>
    </div>
    @endif
    <div class="col-lg-6 col-md-12 my-3">
      <div class="custom-scrollbar" style="max-height: 500px; overflow: auto">
        @if($duHocHanQuocNews)
        @for($i = 1; $i < sizeof($duHocHanQuocNews); $i++) 
        <div class="card border-0 mb-3">
          <div class="row no-gutters">
            <div class="col-md-4" style="height: 100px">
            <img src="/storage/{{ $duHocHanQuocNews[$i]->image }}" class="card-img" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a class="text-dark" href="/tin-tuc/{{ $duHocHanQuocNews[$i]->slug }}">
                  <h5 class="card-title text-truncate">{{ $duHocHanQuocNews[$i]->title }}</h5> 
                </a>
                <p class=" card-text line-clamp-3">{{ $duHocHanQuocNews[$i]->description }}</p>
              </div>
            </div>
          </div>
      </div>
      @endfor
      @endif
    </div>
  </div>
</div>
</section>
</div>
@endsection