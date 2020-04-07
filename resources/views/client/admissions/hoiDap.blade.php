@extends('layouts.app')
@section('content')
<div class="container">
  <div class="bg-light p-4">
    <div class="row">
      <div class="col-md-3">
        @include('client.sidebar')
      </div>
      <div class="col-md-9">
        <h2 class="text-yellow border-bottom border-3 border-yellow pb-2">
          Hỏi đáp
        </h2>
        <div class="accordion" id="accordion">
          @for($i = 0; $i < sizeof($questions); $i++) <div class="card">
            <div class="card-header" id="heading{{$i}}" data-toggle="collapse" data-target="#collapse{{$i}}"
              aria-expanded="false" aria-controls="collapse{{$i}}">
              <span class="btn collapsed text-left">
                {{$i+1}}. {{$questions[$i]}}
              </span>
            </div>
            <div id="collapse{{$i}}" class="collapse" aria-labelledby="heading{{$i}}" data-parent="#accordion">
              <div class="card-body">
                <p>{{ $answers[$questions[$i]] }}</p>
              </div>
            </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
</div>
</div>
@endsection