@if(request()->is('*/cong-nghe-oto'))
<img class="mb-3" src="{{ asset('images/chatluongcao/banner/banner_oto.jpg') }}" width="100%">
@endif

@if(request()->is('*/du-lich-khach-san'))
<img class="mb-3" src="{{ asset('images/chatluongcao/banner/banner_dulich.jpg') }}" width="100%">
@endif

@if(request()->is('*/ngon-ngu'))
<img class="mb-3" src="{{ asset('images/chatluongcao/banner/banner_ngonngu.jpg') }}" width="100%">
@endif