<?php 
  $types = [
    'tin-noi-bo' => 'Tin nội bộ',
    'tin-cong-nghe' => 'Tin công nghệ',
    'su-kien' => 'Sự kiện',
    'tuyen-sinh' => "Tin tuyển sinh"
  ]
?>

@extends('layouts.app')
@section('content')
<div class="container">
  <div class="bg-light p-4">
    {{-- top news --}}
    <section id="topNews" class="mb-4">
      <h2 class="text-yellow text-center text-uppercase mb-4">Tin tức mới nhất</h2>
      <div class="row p-2">
        @if(sizeof($topNews) > 0)
        <div class="col-md-6 col-sm-12">
          <div class="card border-0 bg-light">
            <a href="/tin-tuc/{{ $topNews['0']->slug }}">
              <img class="card-img-top" src="/storage/{{$topNews['0']->image ?? ''}}"
                style="height: 17rem; object-fit: cover;">
            </a>
            <div class="card-body px-0">
              <a href="/tin-tuc/{{$topNews['0']->type}}" class="text-uppercase py-1 px-2 bg-yellow text-white">
                {{ $types[$topNews['0']->type] }}
              </a>
              <h5 class="card-title line-clamp-1 mt-3">
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
                <a href="/tin-tuc/{{ $topNews[$i]->slug }}">
                  <img class="card-img-top" src="/storage/{{$topNews[$i]->image ?? ''}}"
                    style="height: 8rem; object-fit: cover;">
                </a>
                <div class="card-body px-0">
                  <a href="/tin-tuc/{{ $topNews[$i]->type }}" class="text-uppercase py-1 px-2 bg-yellow text-white">
                    {{ $types[$topNews[$i]->type] }}
                  </a>
                  <h6 class="card-title mt-3">
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
              <a href="/tin-tuc/{{ $topNews[$i]->slug }}">
                <img class="card-img-top" src="/storage/{{$topNews[$i]->image ?? ''}}"
                  style="height: 8rem; object-fit: cover;">
              </a>
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
  </section>


  {{-- internal news --}}
  <section id="internal" class="mb-4">
    <div class="border-bottom border-3 border-yellow py-1 mb-4">
      <a href="{{ route('tin_noi_bo') }}" class="text-uppercase p-2 bg-yellow text-white">
        Tin nội bộ
      </a>
    </div>
    <div class="row">
      @foreach($internalNews as $news)
      <div class="col-md-4">
        <div class="card border-0 bg-light">
          <a href="/tin-tuc/{{ $news->slug }}">
            <img class="card-img-top" src="/storage/{{$news->image ?? ''}}" alt="{{$news->slug}}"
              style="object-fit: cover; height: 13rem;">
          </a>
          <div class="card-body px-0">
            <h5 class="card-title line-clamp-3">
              <a class="text-dark" href="/tin-tuc/{{ $news->slug }}">
                {{$news->title}}
              </a>
            </h5>
            <p class="card-text">
              <small class="text-muted">
                {{date('d/m/Y', strtotime($news->created_at))}}
              </small>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  {{-- tech news --}}
  <section id="tech" class="mb-4">
    <div class="border-bottom border-3 border-yellow py-1 mb-4">
      <a href="{{ route('tin_cong_nghe') }}" class="text-uppercase p-2 bg-yellow text-white">
        Tin công nghệ
      </a>
    </div>

    <div class="row">
      @foreach($techNews as $news)
      <div class="col-md-4">
        <div class="card border-0 bg-light">
          <a href="/tin-tuc/{{ $news->slug }}">
            <img class="card-img-top" src="/storage/{{$news->image ?? ''}}" alt="{{$news->slug}}">
          </a>
          <div class="card-body px-0">
            <h5 class="card-title line-clamp-3">
              <a class="text-dark" href="/tin-tuc/{{ $news->slug }}">
                {{$news->title}}
              </a>
            </h5>
            <p class="card-text">
              <small class="text-muted">
                {{date('d/m/Y', strtotime($news->created_at))}}
              </small>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  {{-- event news --}}
  <section id="event" class="mb-4">
    <div class="border-bottom border-3 border-yellow py-1 mb-4">
      <a href="{{ route('events') }}" class="text-uppercase p-2 bg-yellow text-white">
        Sự kiện
      </a>
    </div>
    <div class="row">
      @foreach($events as $event)
      <div class="col-md-4">
        <div class="card border-0 bg-light">
          <a href="/tin-tuc/{{ $event->slug }}">
            <img class="card-img-top" src="/storage/{{$event->image ?? ''}}" alt="{{$event->slug}}">
          </a>
          <div class="card-body px-0">
            <h5 class="card-title line-clamp-3">
              <a class="text-dark" href="/tin-tuc/{{ $event->slug }}">
                {{$event->title}}
              </a>
            </h5>
            <p class="card-text">
              <small class="text-muted">
                {{date('d/m/Y', strtotime($event->created_at))}}
              </small>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</div>
</div>
@endsection