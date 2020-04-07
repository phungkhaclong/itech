@extends('layouts.app')

@section('content')
<div class="container">
  @include('message')
  <div>
    @include('client.chatluongcao.partials.banner')
    @include('client.chatluongcao.partials.target')
    @include('client.chatluongcao.partials.program')
    @include('client.chatluongcao.partials.job')
    @include('client.chatluongcao.partials.slider')
    @include('client.chatluongcao.partials.register')
  </div>
</div>

@endsection