@extends('layouts.app')
@section('content')
<div class="container">
  <div class="bg-light p-4">
    <div class="row">
      <div class="col-md-3">
        @include('client.sidebar')
      </div>
      <div class="col-md-9">
        <h2 class="text-yellow border-bottom border-3 border-yellow pb-2">
          Quy chế tuyển sinh
        </h2>
        <div class="accordion" id="accordion">
          <div class="card">
            <div class="card-header text-green text-decoration-none" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
              aria-expanded="false" aria-controls="collapseOne">
              <span class="btn collapsed">
                1. Ngành đào tạo
              </span>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <table class="table table-bordered" style="text-align: center;">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Ngành</th>
                      <th scope="col">Mã ngành</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Quản trị mạng & bảo mật</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Lập trình máy tính</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Thiết kế đồ họa</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>An toàn thông tin</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Lập trình ứng dụng</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Công nghệ Ô tô</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Khách sạn du lịch</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Ngôn ngữ(Anh,Hàn,Nhật)</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header text-green text-decoration-none" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              <span class="btn collapsed">
                2. Đối tượng tuyển sinh
              </span>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>Nhà trường tổ chức xét tuyển Cao đẳng chính quy với 2 đối tượng thì sinh sau đây vào học hệ Cao
                  </li>
                  <ul>
                    <li>Học sinh đã tốt nghiệp THPT hoặc bổ túc THPT</li>
                    <li>Thí sinh tham dự kỳ thi THPT Quốc gia do các cụm trường Đại học tổ chức</li>
                  </ul>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header text-green text-decoration-none" id="headingThree" data-toggle="collapse" data-target="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              <span class="btn collapsed">
                3. Kỳ thi tuyển sinh
              </span>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                dffsfdsfdsfds
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header text-green text-decoration-none" id="headingOne" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="
            false" aria-controls="collapseOne">
              <span class="btn collapsed">
                4. Miễn thi sơ tuyển-Xét học bạ THPT
              </span>
            </div>
            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                dsfsfds
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header text-green text-decoration-none" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo2"
              aria-expanded="false" aria-controls="collapseTwo">
              <span class="btn collapsed">
                5. Miễn thi sơ tuyển-Xét kết quả THPT
              </span>
            </div>
            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                sdadfdsf
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header text-green text-decoration-none" id="headingThree" data-toggle="collapse" data-target="#collapseThree3"
              aria-expanded="false" aria-controls="collapseThree">
              <span class="btn collapsed">
                6. Tuyển thẳng
              </span>
            </div>
            <div id="collapseThree3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                dffsfdsfdsfds
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection