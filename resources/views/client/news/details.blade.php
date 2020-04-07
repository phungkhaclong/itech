@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light p-5 tin-tuc">
    <h1>{{$news->title}}</h1>
    <h5>{{$news->description}}</h5>
    <div class="text-center mb-3">
      <img src="/storage/{{ $news->image ?? ''}}" alt="" width="90%">
    </div>
    {!! $news->content !!}
  </div>
</div>
@endsection