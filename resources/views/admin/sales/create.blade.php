@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm ưu đãi</h1>
  </div>

  <div class="row">
    <div class="col">
      <div class="card display-inline">
        <div class="card-body">
          <form id="form" action="/admin/sales" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="course_id">Mã ngành ưu đãi</label>
              <div class="col-sm-10">
                <select class="form-control @error('course_id') is-invalid @enderror" id="course_id" name="course_id">
                  @foreach ($courses as $course)
                  <option value="{{$course->course_id}}" {{old('course_id') == $course->course_id ? 'selected' : ''}}>
                    {{$course->course_id.' - '.$course->name}}
                  </option>
                  @endforeach
                </select>
                @error('course_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="price">Giá ưu đãi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                  value="{{ old('price') }}">
                @error('price')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="from_date">Từ ngày</label>
              <div class="col-sm-10">
                <input type="date" class="form-control @error('from_date') is-invalid @enderror" id="from_date"
                  name="from_date" value="{{ old('from_date') }}">
                @error('from_date')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="to_date">Tới ngày</label>
              <div class="col-sm-10">
                <input type="date" class="form-control @error('to_date') is-invalid @enderror" id="to_date"
                  name="to_date" value="{{ old('to_date') }}">
                @error('to_date')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group text-center">
              <a href="/admin/sales" class="btn btn-secondary">Cancel</a>
              <button id="btnSubmit" type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{asset('js/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('js/plugins/ckfinder/ckfinder.js')}}"></script>
<script>
  CKEDITOR.replace('txtContent', {
    height: 500,
    filebrowserBrowseUrl: "{{asset('js/plugins/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files')}}"});
</script>

@endsection