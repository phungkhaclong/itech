@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light p-4" style="min-height: 45rem">
    <div class="row">
      <div class="col-md-3">
        @include('client.sidebar')
      </div>
      <div class="col-md-9">

        <h2>Các phần mềm hỗ trợ</h2>
        <div class="table-responsive">
          <table class="table table-hover table-bordered my-4">
            <tr>
              <th>Tên phần mềm</th>
              <th>Link dowload</th>
            </tr>
            @foreach ($softwares as $software)
            <tr>
              <td>{{$software->name}}</td>
              <td>
                <a href="{{$software->url}}">
                  {{$software->url}}
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection