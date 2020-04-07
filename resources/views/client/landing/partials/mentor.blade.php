<section id="mentor">
  <h2 class="bg-yellow text-light text-center py-2 m-0 text-uppercase">Chuyên gia sẽ đồng hành cùng bạn trong khóa học
    này</h2>
  @if(request()->is('*/ccna'))
  <div class="container">
    <div class="row p-2 bg-yellow">
      <div class="col-md-8">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/thayduy.jpg')}}" width="100%">
            </div>
            <div class="col-md-7">
              <h4 class="rounded">Giảng viên TS.Nguyễn Hoài Duy</h4>
              <p class="text-justify" style="font-size: 0.8rem;">Với hơn 15 năm kinh nghiệm làm việc trong ngành Công
                nghệ thông tin và truyền thông(ITC), đồng thời có 15 năm giảng dạy với chuyên ngành Quản trị mạng & Bảo
                mật hệ thống, TS.Nguyễn Hoài Duy trở thành chuyên gia bảo mật cho nghiều Data Center lớn tại Việt Nam :
                Ngân hàng Viettinbank , Ngân hàng BIDV , Ngân hàng Vietcombank...
                Hiện tại TS.Nguyễn Hoài Duy giữ chức vụ Viện Trưởng Viện Đào Tạo Công Nghệ Thông Tin Quốc Tế I-TECH,
                đồng thời là chuyên gia bảo mật của Ngân hàng Vietcombank,
                TS.Nguyễn Hoài Duy tốt nghiệp tiến sĩ ngành Công nghệ thông tin tại Học Viện hàng không Quốc gia
                Nga(MATI),
                Ông đã đạt nhiều chứng chỉ chuyên nghiệp uy tín như : CCIE,MCT,CHFI,VMware VCP ...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/courses/mentor/Security_thayduy.png')}}" width="100%" height="100%">
      </div>
    </div>
    <div class="row p-2 bg-yellow">
      <div class="col-md-8">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/mentor_thayduy.jpg')}}" width="100%" height="100%">
            </div>
            <div class="col-md-7">
              <h4 class="rounded">Giảng viên KS.Nguyễn Tiến Mạnh</h4>
              <p class="text-justify" style="font-size: 0.8rem;">Có 3 năm kinh nghiệm triển khai , vận hành các hệ thống
                opensource.<br>
                * 1 năm kinh nghiệm triển khai cho dự án chính phủ.<br>
                * 2 năm kinh nghiệm triển khai hệ thống tài chính cho Khách hàng khu vực Châu Á, Thái Bình Dương<br>
                * Có kinh nghiệm triển khai thực tế trên các hệ thống Cloud( AWS, Azure, GCP) lớn nhất hiện nay<br>
                * Chứng chỉ : LPI, AWS Solution Architect .
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/courses/mentor/ccnp1.jpg')}}" width="100%" height="100%">
      </div>
    </div>
  </div>
  @endif

  @if(request()->is('*/mcsa'))
  <div class="p-2 bg-yellow position-relative" style="height: 500px; width: 100%;">
    <div class="position-absolute" style="top: 1rem; left: 2rem;">
      <div class="rounded p-2">
        <div class="row">
          <div class="col-lg-3 bg-light ">
            <img src="{{ asset('images/courses/mentor/mentor_thayhung.jpg')}}" height="250px"
              style="padding: 5px; width: 100%;">
          </div>
          <div class="col-md-5 bg-light" style="padding-top: 10px">
            <h4 class="p-2 bg-primary text-white rounded">Giảng viên Nguyễn Quốc Hưng</h4>
            <p class="text-justify" style="font-size: 0.8rem;">Là một kỹ sư quản trị Hệ thống mạng với 5 năm kinh nghiệm
              giảng dạy và triển khai dự án thực tế tại các Doanh nghiệp-Tổ chức lớn.<br>
              Giảng viên chính bộ môn dịch vụ mạng.<br>
              Làm việc thưc tế tại các dự án như thép Việt Ý,thép Thái Nguyên.<br>
              Các chứng chỉ: MCSA 2012, MCSE 2012, MCSA 2016,<br> VMware Certifeced Associate,....
            </p>
          </div>
        </div>
      </div>
    </div>
    <img class="position-absolute" width="40%" style="bottom: 1rem; right: 2rem;"
      src="{{ asset('images/courses/mentor/mentor_bangthayhung.jpg')}}">
  </div>

  @endif

  @if(request()->is('*/linux'))
  <div class="container">
    <div class="row p-2 bg-yellow">
      <div class="col-md-8">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/thayduy.jpg')}}" width="100%">
            </div>
            <div class="col-md-7">
              <h4 class="p-2 bg-primary text-white rounded">Giảng viên TS.Nguyễn Hoài Duy</h4>
              <p class="text-justify" style="font-size: 0.8rem;">Với hơn 15 năm kinh nghiệm làm việc trong ngành Công
                nghệ thông tin và truyền thông(ITC), đồng thời có 15 năm giảng dạy với chuyên ngành Quản trị mạng & Bảo
                mật hệ thống, TS.Nguyễn Hoài Duy trở thành chuyên gia bảo mật cho nghiều Data Center lớn tại Việt Nam :
                Ngân hàng Viettinbank , Ngân hàng BIDV , Ngân hàng Vietcombank...
                Hiện tại TS.Nguyễn Hoài Duy giữ chức vụ Viện Trưởng Viện Đào Tạo Công Nghệ Thông Tin Quốc Tế I-TECH,
                đồng thời là chuyên gia bảo mật của Ngân hàng Vietcombank,
                TS.Nguyễn Hoài Duy tốt nghiệp tiến sĩ ngành Công nghệ thông tin tại Học Viện hàng không Quốc gia
                Nga(MATI),
                Ông đã đạt nhiều chứng chỉ chuyên nghiệp uy tín như : CCIE,MCT,CHFI,VMware VCP ...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/courses/mentor/Security_thayduy.png')}}" width="100%" height="100%">
      </div>
    </div>
    <div class="row p-2 bg-yellow">
      <div class="col-md-8">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/mentor_thayson.png')}}" width="100%" height="100%">
            </div>
            <div class="col-md-7">
              <h4 class="p-2 bg-primary text-white rounded">Giảng viên KS.Trần Nam Sơn</h4>
              <p class="text-justify" style="font-size: 0.8rem;">Có 8 năm kinh nghiệm triển khai , vận hành các hệ thống
                opensource.<br>
                * 1 năm kinh nghiệm triển khai cho dự án chính phủ.<br>
                * 2 năm kinh nghiệm triển khai hệ thống tài chính cho Khách hàng khu vực Châu Á, Thái Bình Dương<br>
                * 5 năm kinh nghiệm tư vấn,thiết lập,duy trì hệ thống cho các dự án offshore từ Nhật Bản.<br>
                * Có kinh nghiệm triển khai thực tế trên các hệ thống Cloud( AWS, Azure, GCP) lớn nhất hiện nay<br>
                * Chứng chỉ : LPI, AWS Solution Architect .
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/courses/mentor/mentor_bangthayson.jpg')}}" width="100%" height="100%">
      </div>
    </div>
  </div>
  @endif

  @if(request()->is('*/ceh'))

  <div class="container">
    <div class="row p-2 bg-yellow">
      <div class="col-md-8">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/thayduy.jpg')}}" width="100%">
            </div>
            <div class="col-md-7">
              <h4 class="p-2 bg-primary text-white rounded">Giảng viên TS.Nguyễn Hoài Duy</h4>
              <p class="text-justify" style="font-size: 0.8rem;">Với hơn 15 năm kinh nghiệm làm việc trong ngành Công
                nghệ thông tin và truyền thông(ITC), đồng thời có 15 năm giảng dạy với chuyên ngành Quản trị mạng & Bảo
                mật hệ thống, TS.Nguyễn Hoài Duy trở thành chuyên gia bảo mật cho nghiều Data Center lớn tại Việt Nam :
                Ngân hàng Viettinbank , Ngân hàng BIDV , Ngân hàng Vietcombank...
                Hiện tại TS.Nguyễn Hoài Duy giữ chức vụ Viện Trưởng Viện Đào Tạo Công Nghệ Thông Tin Quốc Tế I-TECH,
                đồng thời là chuyên gia bảo mật của Ngân hàng Vietcombank,
                TS.Nguyễn Hoài Duy tốt nghiệp tiến sĩ ngành Công nghệ thông tin tại Học Viện hàng không Quốc gia
                Nga(MATI),
                Ông đã đạt nhiều chứng chỉ chuyên nghiệp uy tín như : CCIE,MCT,CHFI,VMware VCP ...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/courses/mentor/Security_thayduy.png')}}" width="100%" height="100%">
      </div>
    </div>
  </div>
  @endif

  @if(request()->is('*/chfi'))
  <div class="container">
    <div class="row p-2 bg-yellow">
      <div class="col-md-8">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/thayduy.jpg')}}" width="100%">
            </div>
            <div class="col-md-7">
              <h4 class="p-2 bg-primary text-white rounded">Giảng viên TS.Nguyễn Hoài Duy</h4>
              <p class="text-justify" style="font-size: 0.8rem;">Với hơn 15 năm kinh nghiệm làm việc trong ngành Công
                nghệ thông tin và truyền thông(ITC), đồng thời có 15 năm giảng dạy với chuyên ngành Quản trị mạng & Bảo
                mật hệ thống, TS.Nguyễn Hoài Duy trở thành chuyên gia bảo mật cho nghiều Data Center lớn tại Việt Nam :
                Ngân hàng Viettinbank , Ngân hàng BIDV , Ngân hàng Vietcombank...
                Hiện tại TS.Nguyễn Hoài Duy giữ chức vụ Viện Trưởng Viện Đào Tạo Công Nghệ Thông Tin Quốc Tế I-TECH,
                đồng thời là chuyên gia bảo mật của Ngân hàng Vietcombank,
                TS.Nguyễn Hoài Duy tốt nghiệp tiến sĩ ngành Công nghệ thông tin tại Học Viện hàng không Quốc gia
                Nga(MATI),
                Ông đã đạt nhiều chứng chỉ chuyên nghiệp uy tín như : CCIE,MCT,CHFI,VMware VCP ...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/courses/mentor/Security_thayduy.png')}}" width="100%" height="100%">
      </div>
    </div>
  </div>
  @endif

  @if(request()->is('*/php'))
  <div class="container">
    <div class="row p-2 bg-yellow">
      <div class="col-md-8" style="margin: auto;">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/mentor_thaykhoa.jpg')}}" width="100%">
            </div>
            <div class="col-md-7">
              <h4 class="p-2 bg-primary text-white rounded">Giảng viên KS Nguyễn Văn Khoa</h4>
              <p class="text-justify" style="font-size: 14px;">Là một lập trình viên với 5 năm kinh nghiệm giảng dạy và
                triển khai dự án thực tế tại các Doanh nghiệp lớn/Tổ chức lớn.<br>
                Giảng viên chính bộ môn lập trình.<br>
                Các ngôn ngữ Lập trình: HTML, CSS, HTML5, CSS3,PHP, nodejs, MySQL, Bootstrap,...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif

  @if(request()->is('*/android'))
  <div class="container">
    <div class="row p-2 bg-yellow">
      <div class="col-md-8" style="margin: auto;">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/mentor_thaykhoa.jpg')}}" width="100%">
            </div>
            <div class="col-md-7">
              <h4 class="p-2 bg-primary text-white rounded">Giảng viên KS Nguyễn Văn Khoa</h4>
              <p class="text-justify" style="font-size: 14px;">Là một lập trình viên với 5 năm kinh nghiệm giảng dạy và
                triển khai dự án thực tế tại các Doanh nghiệp lớn/Tổ chức lớn.<br>
                Giảng viên chính bộ môn lập trình.<br>
                Các ngôn ngữ Lập trình: HTML, CSS, HTML5, CSS3,PHP, nodejs, MySQL, Bootstrap,...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endif

  @if(request()->is('*/graphic'))
  <div class="container">
    <div class="row p-2 bg-yellow">
      <div class="col-md-8">
        <div class="bg-light rounded p-2">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/courses/mentor/thayduy.jpg')}}" width="100%">
            </div>
            <div class="col-md-7">
              <h4 class="p-2 bg-primary text-white rounded">Giảng viên TS.Nguyễn Hoài Duy</h4>
              <p class="text-justify" style="font-size: 0.8rem;">Với hơn 15 năm kinh nghiệm làm việc trong ngành Công
                nghệ thông tin và truyền thông(ITC), đồng thời có 15 năm giảng dạy với chuyên ngành Quản trị mạng & Bảo
                mật hệ thống, TS.Nguyễn Hoài Duy trở thành chuyên gia bảo mật cho nghiều Data Center lớn tại Việt Nam :
                Ngân hàng Viettinbank , Ngân hàng BIDV , Ngân hàng Vietcombank...
                Hiện tại TS.Nguyễn Hoài Duy giữ chức vụ Viện Trưởng Viện Đào Tạo Công Nghệ Thông Tin Quốc Tế I-TECH,
                đồng thời là chuyên gia bảo mật của Ngân hàng Vietcombank,
                TS.Nguyễn Hoài Duy tốt nghiệp tiến sĩ ngành Công nghệ thông tin tại Học Viện hàng không Quốc gia
                Nga(MATI),
                Ông đã đạt nhiều chứng chỉ chuyên nghiệp uy tín như : CCIE,MCT,CHFI,VMware VCP ...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/courses/mentor/Security_thayduy.png')}}" width="100%" height="100%">
      </div>
    </div>
  </div>
  @endif

</section>