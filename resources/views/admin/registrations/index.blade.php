@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  @include('message')
  <div class="d-sm-flex align-items-center justify-content-between mb-5">
    <h1 class="h3 mb-0 text-gray-800">Quản lý đăng ký</h1>
  </div>
  <div class="row mx-2">
    <table class="table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Họ và tên</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Email</th>
          <th scope="col">Nghề nghiệp</th>
          <th scope="col">Tiêu đề</th>
          <th scope="col">Nội dung</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($registrations as $registration)
        <tr>
          <th scope="row">{{$registration->id}}</th>
          <td>{{$registration->name}}</td>
          <td>{{$registration->phone}}</td>
          <td>{{$registration->email}}</td>
          <td>
            {{ $registration->job ? ($registration->job == 'di_hoc' ? 'Người đi học' : 'Người đi làm') : ''}}
          </td>
          <td>{{$registration->title}}</td>
          <td>{{$registration->content}}</td>
          <td>
            <button data-toggle="modal" data-target="#deleteModal{{$registration->id}}"
              class="btn btn-sm btn-danger">Xoá</button>
            <div class="modal fade" id="deleteModal{{$registration->id}}" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xoá?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-footer">
                    <form class="form-inline" action="/admin/registrations/{{$registration->id ?? ''}}" method="POST"
                      id="form">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-secondary mr-2" type="button" data-dismiss="modal">Huỷ</button>
                      <button id="btnSubmit" class="btn btn-danger" type="submit">Xoá</button>
                    </form>
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
</div>
@endsection