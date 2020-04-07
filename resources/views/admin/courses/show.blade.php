@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  @include('message')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{$course->name}}</h1>
  </div>
  <div class="row m-2 d-flex justify-content-end">
    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalAddSection">
      <i class="fas fa-plus"></i>
      <span>Thêm danh mục</span>
    </button>
  </div>
  @include('admin.courses.addSection')
  <div class="row mx-2">
    <table class="table table-bordered table-hover m-0">
      <thead class="thead-light">
        <tr>
          <th scope="col">Tên danh mục</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($sections as $section)
        <tr class="accordion-toggle">
          <td>
            {{$section->name}}
            <table class="table m-0">
              @foreach ($section->lessons as $lesson)
              <tr>
                <td class="d-flex justify-content-between">
                  {{$lesson->name}}
                  <button data-toggle="modal" data-target="#deleteModal{{$lesson->id}}"
                    class="btn btn-sm btn-danger">Xoá</button>
                  @include('admin.courses.deleteLesson')
                </td>
              </tr>
              @endforeach
            </table>
          </td>
          <td>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalAddLesson{{$section->id}}">
              <i class="fas fa-plus"></i>
              <span>Thêm bài học</span>
            </button>
            @include('admin.courses.addLesson')

            <button data-toggle="modal" data-target="#deleteModal{{$section->id}}" class="btn btn-sm btn-danger">
              Xoá
            </button>
            @include('admin.courses.deleteSection')
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection