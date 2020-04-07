@extends('layouts.app')

@section('content')
@include('message')
<div class="container">
  <div class="bg-light px-5 py-3">
    <div class="border border-green border-3 p-3 rounded">
      <?php $i = 1; ?>
      @foreach($questions as $question => $answers)
      <h5>Câu {{ $i++ }}: {{ $question }}</h5>
      @foreach ($answers as $answer)
      <div class="form-check pl-5">
        <input class="form-check-input" type="radio" name="{{ $question }}" id="check">
        <label class="form-check-label" for="check">
          {{ $answer }}
        </label>
      </div>
      @endforeach
      @endforeach
      <button type="button" class="btn my-3 btn-green" data-toggle="modal" data-target="#testModal">Gửi kết quả</button>
    </div>
  </div>
</div>

<div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="testModalLabel" aria-hidden="true"
  data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="testModalLabel">Thông tin liên hệ</h5>
      </div>
      <div class="modal-body">
        <form action="/contact" method="POST">
          @csrf
          <div class="form-group">
            <input type="name" class="form-control" id="name" name="name" placeholder="Họ và tên" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-green">Gửi thông tin</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection