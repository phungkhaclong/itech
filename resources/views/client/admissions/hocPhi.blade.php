@extends('layouts.app')
@section('content')
<div class="container">
  <div class="bg-light p-4" style="min-height: 30rem;">
    <div class="row">
      <div class="col-md-3">
        @include('client.sidebar')
      </div>
      <div class="col-md-9">
        <h2 class="text-yellow border-bottom border-3 border-yellow pb-2">
          Học phí-Học bổng
        </h2>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link text-green text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  01 Chương trình tín dụng ưu đãi
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <h5>• Chương trình tín dụng ưu đãi</h5>
                <p>o Nhận 1 suất học Bổng khi đăng ký tuyển sinh sớm.</p>
                <p>o Tư vấn và hỗ trợ xin học bổng du học Đức và Nhật</p>
                <p>o Hỗ trợ vay vốn Ngân hàng trong suốt quá trình học tập </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed text-green text-decoration-none" type="button" data-toggle="collapse"
                  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  02 Học phí
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <h5 >• Học phí</h5>
                <p>o Trụ sở chính : 528.000 đ/tháng</p>
                <p>o Cơ sở 2 đóng thêm tiền cơ sở vật chất 500.000đ/kỳ</p>
                <p>o Cơ sở 3 đóng thêm tiền cơ sở vật chất 600.000đ/kỳ</p>
                <p>o Giảm 50% phí cơ sở vật chất cho sinh viên nhập học đến hết 15/09/2020</p>
                <p>o Giảm 50% phí cơ sở vật chất năm 2020 tại cơ sở 2 và 3 cho sinh viên nhập học đợt 1</p>
                <p>o Thời gianh nhận hồ sơ từ ngày 15/03/2020</p>
                <p>o Thời gian đào tạo 2,5 năm</p>
                <p>Đối với ngành CNTT:</p>
                <p>+Hệ cơ bản:5.250.000 vnđ/1 kỳ</p>
                <p>+Hệ cơ nâng cao:10.000.000 vnđ/1 kỳ</p>
                <p>-Đối với ngành Du Lịch-Khách Sạn</p>
                <p>+</p>
                <p>+</p>
                <p>-Đối với ngành Công Nghệ ÔTô</p>
                <p>+</p>
                <p>+</p>
                <p>-Đối với ngành tiếng(Anh,Hàn,Nhật)</p>
                <p>+</p>
                <p>+</p>
                <p style="font-weight:bold">*Học bổng</p>
                <p>-Đối với sinh viên có điểm phẩy 8,5 trở lên nhận được học bổng toàn phần(trị giá 10.000.000)</p>
                <p>-Đối với sinh viên có điểm phẩy 7,5 trở lên nhận được học bổng trị giá 5.000.000đ </p>
                <p>-Đối với sinh viên có điểm phẩy 6,5 trở lên nhận được học bổng trị giá 3.000.000đ</p>
                <p>-Đối với sinh viên có điểm phẩy 6,0 trở lên nhận được học bổng trị giá 2.000.000đ </p>
                <p style="font-weight:bold">*Điều kiện nhận học bổng</p>
                <p>-Tính với điểm phẩy trung bình 3 năm lớp 10,11,12</p>
                <p>-Áp dụng với sinh viên hệ CLC và kỳ học đầu tiên của năm nhất</p>
                <p style="font-weight:bold">*Hỗ trợ sinh viên là con thương binh,liệt sĩ,hộ nghèo</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed text-green text-decoration-none" type="button" data-toggle="collapse"
                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  03 Chính sách học phí
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <h5>• Chính sách học phí</h5>
                <p>
                  <p>o Nhà trường đưa ra các mức hỗ trợ cho thí sinh nhập học năm 2020 như sau:</p>
                  <p>o Miễn giảm học 100% học phí năm 2020 đối với thí sinh viên đạt Học sinh giỏi cả 3 năm lớp 10, 11,
                    12</p>
                  <p>o Miễn giảm 50% học phí năm 2020 đối với thí sinh sinh đạt điểm tổng kết lớp 12 từ 8.5 trở lên</p>
                  <p>o Miễn giảm 50% học phí năm 2020 đối với thì sinh là con Thương binh, Liệt sĩ</p>
                  <p>o Miễn phí Ký túc xá học kỳ 1 đối với con Thương binh, Liệt sĩ</p>
                  <p>o Hỗ trợ giới thiệu việc làm trong thời gian học tập</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection