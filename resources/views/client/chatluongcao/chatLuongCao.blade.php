@extends('layouts.app')

@section('content')
<div class="container">
  <div class="bg-light">

    <section class="my-3" id="images-slider">
      <a href="#register">
        <img class="d-block w-100" src="{{ asset('images/chatluongcao/banner_chatluongcao.jpg') }}" alt="First slide">
      </a>
    </section>

    <section class="mb-4" id="mohinh" class="p-3">
      <div class="bg-light">
        <h1 class="text-yellow text-center"> MÔ HÌNH ĐÀO TẠO CỦA VIỆN CNTT QUỐC TẾ I-TECH 2020 </h1>
        <h4 class="text-center text-justifi"> Mô hình đào tạo CNTT ngược đầu tiên tại Việt Nam, giúp tất cả các học viên
          hình dung được những yêu cầu tuyển dụng trước khi bắt đầu học tập. </h4>
        <img class="d-block w-100" src="{{ asset('images/chatluongcao/mohinh.png') }}" alt="First slide">
      </div>
    </section>

    <section class="mb-3" id="lotrinh">
      <div class=" bg-light ">
        <h2 class="text-center text-white border-bottom border-3 border-yellow pb-2 bg-yellow">
          Lộ trình học tập của kỹ sư thực hành CNTT hệ chính quy 03 năm, cam kết không có việc làm sẽ trả lại toàn bộ
          học phí
        </h2>
        <div class="p-3">
          <h5 class="font-weight-bold">Quy trình học tập “Cầm tay chỉ việc” xuyên suốt 03 năm học của Kỹ Sư Công Nghệ
            Thông Tin Hệ Chính Quy</h5>
          <p>- 1 Năm học sẽ chia làm 2 kỳ học.1 kỳ học sẽ học trong 5 tháng</p>
          <p>- 3 tháng đầu sinh viên được học theo mô hình<span class="font-weight-bold"> “cầm tay chỉ việc”</span></p>
          <p>- 1 lớp không quá 30 sinh viên, trên lớp 1 môn có 2 giảng viên, các sinh viên sẽ được phát Laptop riêng để
            học và thực hành trực tiếp, nếu gặp bài khó sẽ hỏi trực tiếp các thầy.</p>
          <p>- 2 tháng sau sinh viên sẽ được đưa ra ngoài công ty, doanh nghệp học tập và làm dự án nếu sinh viên làm
            được
            các phần trong dự án sẽ được công ty trả lương trực tiếp.)</p>
        </div>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link text-green text-decoration-none" type="button" data-toggle="collapse"
                  data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h4><i class="far fa-star"></i>
                    Năm I</h4>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="text-justify">
                  <h5>- Sinh viên được đào tạo kỹ năng theo nhận thức từ ngành học.</h5>
                  Các sinh viên sẽ được đào tạo ngay vào các ngành học đã lựa chọn, hạn chế những môn học không liên
                  quan nhiều đến chuyên ngành của các bạn.
                  <h5>- Sinh viên được đào tạo thêm chương trình Tiếng Nhật Miễn Phí.</h5>
                  Để đáp ứng cho các sinh viên năm 2 được thực hành thực tế các công ty doanh nghệp tại Nhật Bản.
                  <h5>- Lúc này sinh viên có thể được làm việc với chức danh Kỹ Thuật Viên.</h5>
                  Sinh viên ra thực hành thực tế ngoài công ty doanh nghệp nếu làm tốt sẽ được các công ty nhận làm bán
                  thời gian hoặc làm các phần trong các dự án của họ, sẽ được chi trả mức lương trung bình từ 3-5 triệu
                  <h5>- Trao đổi sinh viên với bên Hàn Quốc dạng vừa học vừa làm (Visa định cư).</h5>
                  Sinh viên mong muốn học tập và lấy bằng tại các trường Cao Đẳng hoặc Đại Học tại Hàn Quốc sẽ được giới
                  thiệu và học tập các trường bên Hàn Quốc được đi làm thêm.
                  <h5>- Sinh viên được đào tạo tiếng Nhật nếu đăng ký theo diện Tu Nghiệp Sinh (thời gian 03 năm).</h5>
                  Sinh viên mong muốn đi lao động bên Nhật Bản sẽ được đào tạo và trường cử đi. Ký hợp đồng lao động
                  trực tiếp với các công ty doanh nghiệp tại Nhật Bản. </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed text-green text-decoration-none " type="button"
                  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4><i class="far fa-star"></i>
                    Năm II</h4>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body text-justify">
                <h5>- Sinh viên học tập thực hành với cường độ cao hơn.</h5>
                Nhằm nâng cao chuyên ngành lúc này sinh viên học tập nhiều hơn có thể sẽ phải học cả buổi tối vì lúc này
                các doanh nghiệp sẽ vào giảng dạy trực tiếp.
                <h5>- Sinh viên sẽ được trực tiếp các công ty Nhật Bản sang chọn để đi thực tập thời gian từ (06 – 10
                  tháng).</h5>
                Những sinh viên muốn được thực tập thực tế các công ty, doanh nghiệp tại Nhật Bản sẽ được các công ty
                Nhật Bản sang tuyển dụng trực tiếp và cam kết với mức lương trung bình từ 30 - 35 triệu
                <h5>- Làm việc và học tập vào các trường cao đẳng bên Nhật và lấy bằng sau khi tốt nghiệp (với Visa định
                  cư).</h5>
                Những sinh viên sau khi thực tập 6 – 10 tháng mong muốn tiếp tục học tập và làm việc tại Nhật Bản sẽ
                được nhà trường gửi hồ sơ bảng điểm của năm thứ I sang trường cao đẳng hoặc Đại Học mà các bạn đã lựa
                chọn để học tập và làm việc với visa kỹ sư.
                <h5>- Sinh viên được cử đi các công ty nhỏ đến vừa.</h5>
                Những sinh viên không muốn đi Nhật Bản sẽ tiếp tục đưa ra doanh nghiệp nhưng sẽ nâng tầm doanh nghiệp
                lên với quy mô lớn hơn. Nhằm cho các bạn có thực hành và cách làm việc chuyên nghiệp hơn.
                <h5>- Sinh viên có thể làm thêm với chức danh Chuyên viên lương trung bình (7-10 triệu)</h5>
                Lúc này trình độ chuyên ngành của sinh viên đã được khẳng định, các công ty sẽ tới trực tiếp trường để
                tuyển dụng nhân sự.
                <h5>- Sinh viên được đào tạo theo chương trình Kỹ Sư tại Nhật (với Visa định cư).</h5>
                Sinh viên đăng ký sau khi hoàn thành khóa học Kỹ Sư công nghệ thông tin Hệ Chính Quy sẽ đi làm tại Nhật
                Bản sẽ được đào tạo thêm tiếng Nhật. Chi phí đi tại trường sẽ thấp chỉ từ ( 1.000 – 3.600 usd)
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed text-green text-decoration-none" type="button"
                  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  <h4><i class="far fa-star"></i>
                    Năm III</h4>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body text-justify">
                <h5>- Sinh viên đi làm sẽ được hỗ trợ học tập theo tín chỉ.</h5>
                Những sinh viên được các công ty nhận làm nhân viên chính thức sẽ được nhà trường tạo điều kiện học tập
                theo tín chỉ. Để hoàn thành chương trình Kỹ Sư công nghệ thông tin Hệ Chính Quy.
                <h5>- Sinh viên Tu Nghiệp Sinh về sẽ học tiếp và lấy bằng kỹ sư CNTT.</h5>
                Những sinh viên sau khi hoàn thành chương trình tu nghiệp sinh (3 năm) sẽ được bảo lưu kết quả và về
                trường tiếp tục học để lấy bằng Kỹ sư công nghệ thông tin hệ chính quy. Được nhà trường giới thiệu đi
                làm tại Nhật Bản theo diện kỹ sư.( visa định cư)
                <h5>- Sinh viên được cử trực tiếp đến công ty doanh nghiệp lớn hoặc tập đoàn.</h5>
                Lúc này sinh viên sẽ được đưa đến các tập đoàn lớn để thực tập và sẽ được các tập đoàn nhận làm nhân
                viên chính thức sau khi hoàn thành tốt thời gian thực tập tại đây, cũng như khẳng định được trình độ
                chuyên môn, đáp ứng cho doanh nghiệp hoặc tập đoàn đó.
                <h5>- Sinh viên được cấp bằng chính quy và chứng chỉ Quốc Tế (được công nhận trên toàn cầu).</h5>
                Sinh viên sau khi học xong chương trình 03 năm sẽ được cấp những
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-3" id="doanhnghiep">
      <h2 class="text-center text-white border-bottom border-3 border-yellow pb-2 bg-yellow">
        DOANH NGHIỆP NÓI GÌ VỀ I-TECH
      </h2>
      <div class="row">
        <div class="col-sm">
          <div class="text-center p-3">
            <img class="rounded-circle" src="{{ asset('images/chatluongcao/doanh_nghiep_1.png') }}" alt="">
            <h3 class="text-bold">Bà Nguyễn Tuyết Nhung</h3>
            <h5 style="font-size:13px;">Chuyên viên nhân sự công ty Canon</h5>
            <p class="text-justify">Sinh viên I-Tech chúng tôi đánh giá rất cao về tính tự học và biết việc mặc dù mới
              ra trường nhưng các em đã có kiến thức vững chắc để làm được việc ngay</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="text-center p-3">
            <img class="rounded-circle" src="{{ asset('images/chatluongcao/doanh_nghiep_2.png') }}" alt="">
            <h3 class="text-bold">Ông Trần Hoàng</h3>
            <h5 style="font-size:13px;">Bộ phận nhân sự tập đoàn Samsung</h5>
            <p class="text-justify">Đợt phỏng vấn đầu năm 2018 chúng tôi đã nhận gần 100 nhân sự tốt nghiệp I-Tech nhìn
              chung về kiến thức các em đáp ứng được ngoài ra các kỹ năng mềm như tiếng anh và giao tiếp chúng tôi đánh
              giá rất cao ở các em</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="text-center p-3">
            <img class="rounded-circle" src="{{ asset('images/chatluongcao/doanh_nghiep_3.png') }}" alt="">
            <h3 class="text-bold">Ông Nguyễn Văn Long</h3>
            <h5 style="font-size:13px;">Giám đốc nhân sự trường CD Hà Nội</h5>
            <p class="text-justify">Đơn vị chúng tôi vừa cần kỹ năng nghiệp vụ vừa cần kỹ năng giao tiếp sư phạm thật
              bất ngờ khi tuyển dụng được sinh viên I-Tech các bạn rất năng động và đầy nhiệt huyết truyền tải được kiến
              thức rất bổ ích</p>
          </div>
        </div>
      </div>
    </section>

    @include('client.chatluongcao.partials.register')

    <section class="mb-3" id="doitac" class="">
      <h2 class="bg-yellow text-light text-center py-2 m-0 text-uppercase">Đối tác tuyển dụng</h2>
      <div class="row p-3 align-items-center">
        <div class="col-md-4 text-center">
          <img class="" src="{{ asset('images/chatluongcao/doi_tac/2.jpg') }}" alt="">
        </div>
        <div class="col-md-4 text-center">
          <img class="" src="{{ asset('images/chatluongcao/doi_tac/3.jpg') }}" alt="">
        </div>
        <div class="col-md-4 text-center">
          <img class="" src="{{ asset('images/chatluongcao/doi_tac/4.jpg') }}" alt="">
        </div>
        <div class="col-md-4 text-center">
          <img class="" src="{{ asset('images/chatluongcao/doi_tac/5.png') }}" alt="">
        </div>
        <div class="col-md-4 text-center">
          <img class="" src="{{ asset('images/chatluongcao/doi_tac/6.jpg') }}" alt="">
        </div>
        <div class="col-md-4 text-center">
          <img class="" src="{{ asset('images/chatluongcao/doi_tac/1.jpg') }}" alt="">
        </div>
      </div>
    </section>

    @include('client.landing.partials.facebook')

  </div>
</div>

@endsection