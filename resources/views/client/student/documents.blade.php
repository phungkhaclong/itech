@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light p-4" style="min-height: 45rem">
    <div class="row">
      <div class="col-md-3">
        @include('client.sidebar')
      </div>
      <div class="col-md-9">
        @if(sizeof($documents) > 0)
        <h2>Các mẫu văn bản</h2>
        <div class="table-responsive">
          <table class="table table-hover table-bordered my-4">
            @foreach ($documents as $item)
            <tr>
              <td>
                {{ $item->name }}
              </td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ route('downloadDocument', $item->id) }}">
                  Download
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        @else
        <h2 class="text-center">Tài liệu đang được cập nhật...</h2>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection