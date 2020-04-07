@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light p-4" style="min-height: 45rem">
    <h2 class="text-center">{{$result->class_name}} - {{$result->subject_name}}</h2>
    <div class="table-responsive">
      {!! $result->content !!}
    </div>
  </div>
</div>
@endsection