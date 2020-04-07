@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light p-4" style="min-height: 45rem">
    <div class="row">
      <div class="col-md-3">
        @include('client.sidebar')
      </div>
      <div class="col-md-9">
        @if(sizeof($results) > 0)
        <h2>Kết quả học tập</h2>
        <div class="table-responsive">
          <table class="table table-hover table-bordered my-4">
            <thead class="thead-light">
              <tr>
                <th>Lớp</th>
                <th>Môn học</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($results as $item)
              <tr>
                <td>
                  {{ $item->class_name }}
                </td>
                <td>
                  {{ $item->subject_name }}
                </td>
                <td>
                  <a class="btn btn-sm btn-info" href="/sinh-vien/ket-qua-hoc-tap/{{$item->id}}">
                    Chi tiết
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @else
        <h2 class="text-center">Đang cập nhật kết quả...</h2>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection