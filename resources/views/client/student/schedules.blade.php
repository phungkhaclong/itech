@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light p-4" style="min-height: 45rem">
    <div class="row">
      <div class="col-md-3">
        @include('client.sidebar')
      </div>
      <div class="col-md-9">
        @if(sizeof($schedules) > 0)
        <h2>Thời khoá biểu</h2>
        <div class="table-responsive">
          <table class="table table-hover table-bordered my-4">
            @foreach ($schedules as $item)
            <tr>
              <td>
                {{ $item->name }}
              </td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ route('downloadSchedule', $item->id) }}">
                  Download
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        @else
        <h2 class="text-center">Thời khoá biểu đang được cập nhật...</h2>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection