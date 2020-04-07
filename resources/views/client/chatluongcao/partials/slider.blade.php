@if(request()->is('*/cong-nghe-oto'))
  <section id="slider" class="mb-3">
  <h1 class="text-center" style="font-size: 28px; font-weight: bold; color: #28a745">HÌNH ẢNH VỀ CÔNG NGHỆ Ô TÔ</h1>
  <marquee behavior="alternate" direction="left" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();">
    @for($i = 1; $i
    <=7; $i++) <img src="{{asset('/images/chatluongcao/oto')}}{{'/'.$i.'.jpg'}}" width="300px" height="220px" alt="CCNA"
      style="margin-left: 7px" />
    @endfor
  </marquee>
  </section>
  @endif
  
  @if(request()->is('*/du-lich-khach-san'))
  <section id="slider" class="mb-3">
  <h1 class="text-center" style="font-size: 28px; font-weight: bold; color: #28a745">HÌNH ẢNH VỀ DU LỊCH KHÁCH SẠN</h1>
  <marquee behavior="alternate" direction="left" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();">
    @for($i = 1; $i
    <=7; $i++) <img src="{{asset('/images/chatluongcao/dulichkhachsan')}}{{'/'.$i.'.jpg'}}" width="300px" height="220px" alt="CCNA"
      style="margin-left: 7px" />
    @endfor
  </marquee>
  </section>
  @endif 

  @if(request()->is('*/ngon-ngu'))
  <section id="slider" class="mb-3">
  <h1 class="text-center" style="font-size: 28px; font-weight: bold; color: #28a745">HÌNH ẢNH VỀ NGÔN NGỮ</h1>
  <marquee behavior="alternate" direction="left" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();">
    @for($i = 1; $i
    <=7; $i++) <img src="{{asset('/images/chatluongcao/ngonngu')}}{{'/'.$i.'.jpg'}}" width="300px" height="220px" alt="CCNA"
      style="margin-left: 7px" />
    @endfor
  </marquee>
  </section>
  @endif