@if(request()->is('sinh-vien/*'))
<div class="list-group list-group-flush">
  <a href="{{ route('thoi_khoa_bieu') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/thoi-khoa-bieu')) active @endif">
    Thời khoá biểu
  </a>
  <a href="{{ route('ket_qua_hoc_tap') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/ket-qua-hoc-tap')) active @endif">
    Kết quả học tập
  </a>
  <a href="{{ route('mau_van_ban') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/mau-van-ban')) active @endif">
    Mẫu văn bản
  </a>
  <a href="{{ route('phan_mem_ho_tro') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/phan-mem-ho-tro')) active @endif">
    Phần mềm hỗ trợ
  </a>
</div>
@endif

@if(request()->is('tuyen-sinh/*'))
<div class="list-group list-group-flush">
  <a href="{{ route('tin_tuyen_sinh') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/tin-tuyen-sinh')) active @endif">
    Tuyển sinh 2020
  </a>
  <a href="{{ route('quy_che_tuyen_sinh') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/quy-che-tuyen-sinh')) active @endif">
    Quy chế tuyển sinh
  </a>
  <a href="{{ route('hoc_phi_hoc_bong') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/hoc-phi-hoc-bong')) active @endif">
    Học phí - Học bổng
  </a>
  <a href="{{ route('lo_trinh_hoc_tap') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/lo-trinh-hoc-tap')) active @endif">
    Lộ trình học tập
  </a>
  <a href="{{ route('hoi_dap') }}"
    class="list-group-item list-group-item-action @if(request()->is('*/hoi-dap')) active @endif">
    Hỏi đáp
  </a>
</div>
@endif