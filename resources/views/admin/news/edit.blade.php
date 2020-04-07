@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sửa tin</h1>
  </div>

  <div class="row">
    <div class="col">
      <div class="card display-inline">
        <div class="card-body">
          <form id="form" action="/admin/news/{{$news->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="title">Tiêu đề</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                  value="{{$news->title}}">
                @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="description">Mô tả</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                  name="description" value="{{ old('description', $news->description) }}">
                @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="image">
                Ảnh
              </label>
              <div class="col-sm-10">
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
                  name="image">
                @error('image')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="content">Nội dung</label>
              <div class="col-sm-10">
                <textarea class="form-control @error('content') is-invalid @enderror" id="txtContent" name="content"
                  rows="10">
                  {{$news->content}}
                </textarea>
              </div>
              @error('content')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="name">Thể loại</label>
              <div class="col-sm-10">
                <select name="type" class="form-control">
                  @foreach ($types as $key => $value)
                  <option value="{{$key}}">{{$value}}</option>
                  @endforeach
                </select>
                @error('type')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group text-center">
              <button id="btnSubmit" type="submit" class="btn btn-primary">Cập nhật</button>
              <a href="/admin/news" class="btn btn-secondary">Cancel</a>
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