@extends('layouts.app')

@section('content')
<div class="container">
  @include('message')
  <div>
    @include('client.landing.partials.banner')
    @include('client.landing.partials.sales')
    @include('client.landing.partials.received')
    @include('client.landing.partials.courseContent')
    @include('client.landing.partials.mentor')
    @include('client.landing.partials.benefit')
    @include('client.landing.partials.feedback')
    @include('client.landing.partials.slider')
    @include('client.landing.partials.register')
    @include('client.landing.partials.facebook')
  </div>
</div>

@endsection