@extends('layout.user')

@section('btnUtama')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="p-2">
  <div class="d-flex flex-wrap justify-content-center">
    <div class="bg-white m-2 rounded-2" style="flex-basis: 45vh; flex-grow:1;">
      <div class="p-2">
        <h5 class="">Target</h5>
        <p class="">Buat target dan kelola energimu!</p>
      </div>
      <img src="images/chart.png" class="card-img-top img-fluid rounded-bottom-2" style="max-height: 50vh" />
    </div>
    <div class="bg-white m-2  rounded-2" style="flex-basis: 45vh; flex-grow:1;">
      <div class="p-2">
        <h5 class="">Komunitas</h5>
        <p class="">Ceritakan harimu di komunitas!</p>
      </div>
      <img src="images/komunitas.jpeg" class="card-img-top img-fluid rounded-bottom-2" style="max-height: 50vh" />
    </div>
    <div class="bg-white m-2  rounded-2" style="flex-basis: 45vh; flex-grow:1;">
      <div class="p-2">
        <h5 class="">Berita</h5>
        <p class="">Jangan tertinggal berita terkini!</p>
      </div>
      <img src="images/new.jpg" class="card-img-top img-fluid rounded-bottom-2" style="max-height: 50vh" />
    </div>
  </div>
</div>
@endsection