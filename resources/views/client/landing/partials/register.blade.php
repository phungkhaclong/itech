<section id="register">
  <div class="container register-bg p-3">
    <div class="row">
      <div class="col-md-6 text-center">
        <h2 class="font-weight-bold" style="font-size: 28pt; color:white">
          Lịch khai giảng dự kiến
        </h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Mã lớp</th>
              <th scope="col">Khai giảng</th>
              <th scope="col">Lịch học</th>
              <th scope="col">Thời gian</th>
            </tr>
          </thead>
          <tbody>
            {{-- TKB CCNA --}}
            @if(request()->is('*/ccna'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif

            {{-- TKB MCSA --}}
            @if(request()->is('*/mcsa'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif

            {{-- TKB Linux --}}
            @if(request()->is('*/linux'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif

            {{-- TKB ceh --}}
            @if(request()->is('*/ceh'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif

            {{-- TKB chfi --}}
            @if(request()->is('*/chfi'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif

            {{-- TKB php --}}
            @if(request()->is('*/php'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif

            {{-- TKB android --}}
            @if(request()->is('*/android'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif

            {{-- TKB graphic --}}
            @if(request()->is('*/graphic'))
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>24/02/2020</td>
              <td>Thứ 2,4,6</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>25/02/2020</td>
              <td>Thứ 3,5</td>
              <td>18:30-20:30</td>
            </tr>
            <tr>
              <th scope="row">CCNA0120</th>
              <td>11/02/2020</td>
              <td>Thứ 7</td>
              <td>08:00-10:00 14:00-16:00</td>
            </tr>
            <tr>
              <th scope="row">CCNA0220</th>
              <td>29/02/2020</td>
              <td>Chủ nhật</td>
              <td>08:30-10:00 13-30-15:30</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>

      <div class="col-md-6">
        <h2 class="font-weight-bold text-white text-center" style="font-size: 28pt;">
          Đăng kí tư vấn tuyển sinh
        </h2>
        <div class="container">
          <form action="/contact" method="POST">
            @csrf
            <div class="form-group">
              <input type="name" class="form-control" id="name" name="name" placeholder="Họ và tên">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
              <select class="form-control" name="job">
                <option value="di_hoc">Bạn đang đi học</option>
                <option value="di_lam">Bạn đang đi làm</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-lg btn-green">Đăng ký ngay</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>