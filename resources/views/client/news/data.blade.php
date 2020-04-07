@foreach ($news as $key => $item)
<div class="col-md-4">
  <div class="card border-0 bg-light">
    <a href="/tin-tuc/{{ $item->slug }}">
      <img class="card-img-top" src="/storage/{{$item->image ?? ''}}" style="height: 12rem; object-fit: cover;">
    </a>
    <div class="card-body px-0">
      <h5 class="card-title">
        <a class="text-dark line-clamp-2" href="/tin-tuc/{{ $item->slug }}">
          {{ $item->title }}
        </a>
      </h5>
      <p class="card-text">
        <small class="text-muted">
          {{date('d/m/Y', strtotime($item->created_at))}}
        </small>
      </p>
    </div>
  </div>
</div>
@endforeach