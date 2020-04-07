@if(sizeof($sections) > 0)
<section id="course-content" class="my-3">
  <h2 class="bg-green text-light text-center py-2 m-0 text-uppercase">Nội dung khoá học</h2>
  <div id="accordion">
    @foreach ($sections as $section)
    <div class="card">
      <div class="card-header bg-light py-3" id="heading{{$section->id}}" data-toggle="collapse"
        data-target="#collapse{{$section->id}}" aria-controls="collapse{{$section->id}}">
        <h5 class="mb-0 text-uppercase text-center">
          {{$section->name}}
        </h5>
      </div>
      <div id="collapse{{$section->id}}" class="collapse show" data-parent="#accordion"
        aria-labelledby="heading{{$section->id}}">
        <div class="card-body p-0">
          @if(sizeof($section->lessons) > 0)
          @for ($i = 0; $i < sizeof($section->lessons); $i++)
            <div class="card">
              <div class="card-body py-2 d-flex justify-content-between">
                <div>
                  <span
                    class="p-2 d-inline-flex justify-content-center align-items-center bg-green rounded-circle text-white mr-4"
                    style="width: 35px; height: 35px;">
                    {{$i+1}}
                  </span>
                  {{$section->lessons[$i]->name}}
                </div>
                <a href="{{$section->lessons[$i]->url}}" target="_blank">Xem</a>
              </div>
            </div>
            @endfor
            @endif
        </div>
      </div>
      @endforeach
    </div>
</section>
@endif