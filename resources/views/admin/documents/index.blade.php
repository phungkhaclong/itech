@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  @include('message')
  {{-- documents --}}
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Quản lý mẫu tin</h1>
  </div>
  <div class="row m-2 d-flex justify-content-end">
    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalAddDocument">
      <i class="fas fa-plus"></i>
      <span>Thêm văn bản</span>
    </button>
  </div>
  <div class="row mx-2 mb-4">
    <table class="table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Tên mẫu tin</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($documents as $document)
        <tr>
          <td scope="col">{{ $document->name }}</td>
          <td>
            <button data-toggle="modal" data-target="#deleteModal{{$document->id}}" class="btn btn-sm btn-danger">
              Xoá
            </button>
            <div class="modal fade" id="deleteModal{{$document->id}}" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xoá?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-footer border-0">
                    <form class="form-inline" action="/admin/documents/{{$document->id}}" method="POST" id="form">
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

  {{-- software --}}
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Phần mềm hỗ trợ</h1>
  </div>
  <div class="row m-2 d-flex justify-content-end">
    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalAddSoftware">
      <i class="fas fa-plus"></i>
      <span>Thêm</span>
    </button>
  </div>
  <div class="row mx-2">
    <table class="table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Tên phân mềm</th>
          <th scope="col">Link</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($softwares as $software)
        <tr>
          <td scope="col">{{ $software->name }}</td>
          <td scope="col">
            <a href="{{ $software->url }}">
              {{ $software->url }}
            </a>
          </td>
          <td>
            <button data-toggle="modal" data-target="#deleteModalSoftware{{$software->id}}"
              class="btn btn-sm btn-danger">
              Xoá
            </button>
            <div class="modal fade" id="deleteModalSoftware{{$software->id}}" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xoá?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-footer border-0">
                    <form class="form-inline" action="/admin/softwares/{{$software->id}}" method="POST" id="form">
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

{{-- form add document --}}
<div class="modal fade" id="modalAddDocument" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm mẫu tin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" action="/admin/documents" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="name" class="col-form-label">Tên mẫu tin:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">File (docx, doc):</label>
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

{{-- form add software --}}
<div class="modal fade" id="modalAddSoftware" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thông tin phần mềm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" action="/admin/softwares" method="POST">
        <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="name" class="col-form-label">Tên phần mềm:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="url" class="col-form-label">Đường dẫn:</label>
            <input type="text" class="form-control" id="url" name="url">
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