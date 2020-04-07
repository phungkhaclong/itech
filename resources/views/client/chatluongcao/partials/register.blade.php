<section class="mb-3" id="dangky">
  <div class="register-bg py-3 px-4">
    <div class="row">
      <div class="col-md-6 text-center">
        <img class="" src="{{ asset('images/chatluongcao/quytrinh.png') }}" alt="" width="100%">
      </div>
      <div class="col-md-6 align-self-center">
        <h2 class="font-weight-bold" style="font-size: 25pt;color: #fff;">ĐĂNG KÝ TƯ VẤN TUYỂN SINH</h2>
        <form action="/contact" method="POST">
          @csrf
          <div class="form-group">
            <input type="name" class="form-control" id="name" name="name" aria-describedby="name"
              placeholder="Họ và tên">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
              placeholder="Email">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phone"
              placeholder="Số điện thoại">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option name="hoc" id="hoc">
                Bạn đang đi học
              </option>
              <option name="lam" id="lam">
                Bạn đang đi làm
              </option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-green text-uppercase">
              Đăng ký ngay
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>