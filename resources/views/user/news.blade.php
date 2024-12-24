@extends('layout.user')

@section('btnBerita')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="fitur berita p-2">
  @if ($news->isEmpty())
    <div class="d-flex justify-content-center">
    <p class="text-secondary">Belum ada berita yang dibuat</p>
    </div>
  @else
    <div class="overflow-y-auto d-flex justify-content-center" style="height: 60vh">
    <div class="d-flex flex-wrap justify-content-center">
      @foreach ($news as $item)
      <div class="card mb-3 me-2" style="flex-basis: 50vh; flex-grow:1;">
      <img src="{{asset('images/news/' . $item->picture)}}" class="card-img-top img-fluid" />
      <div class="card-body">
      <h5 class="card-title">{{$item->title}}</h5>
      <p class="card-text">
      {{$item->description}}
      </p>
      <a href="{{$item->link}}">Link
      Eksternal</a><br>
      <span class="text-secondary">{{$item->created_at}}</span>
      </div>
      </div>
    @endforeach
    </div>
    </div>
  @endif
</div>
@endsection