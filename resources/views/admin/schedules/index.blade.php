@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  @include('message')
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Quản lý thời khóa biểu</h1>
  </div>
  <div class="row m-2 d-flex justify-content-end">
    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalAddDocument">
      <i class="fas fa-plus"></i>
      <span>Thêm thời khoá biểu</span>
    </button>
  </div>
  <div class="row mx-2">
    <table class="table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Tiêu đề</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($schedules as $schedule)
        <tr>
          <td scope="col">{{ $schedule->name }}</td>
          <td>
            <button data-toggle="modal" data-target="#deleteModal{{$schedule->id}}" class="btn btn-sm btn-danger">
              Xoá
            </button>
            <div class="modal fade" id="deleteModal{{$schedule->id}}" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="schedule">
                <div class="modal-content">
                  <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xoá?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-footer border-0">
                    <form class="form-inline" action="/admin/schedules/{{$schedule->id}}" method="POST" id="form">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-secondary mr-2" type="button" data-dismiss="modal">Huỷ</button>
                      <button class="btn btn-sm btn-danger" id="btnSubmit" type="submit">Xoá</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{-- form add schedule --}}
<div class="modal fade" id="modalAddDocument" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="schedule">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thời khoá biểu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" action="/admin/schedules" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="name" class="col-form-label">Tiêu đề:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">File (xlsx, xls):</label>
            <input type="file" class="form-control-file" id="file" name="file">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Huỷ</button>
          <button id="btnSubmit" type="submit" class="btn btn-sm btn-success">Thêm</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection