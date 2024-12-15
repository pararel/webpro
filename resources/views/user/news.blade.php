@extends('layout.user')

@section('btnBerita')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="fitur berita p-2">
  <div class="overflow-y-auto d-flex justify-content-center" style="height: 60vh">
    <div class="d-flex flex-wrap justify-content-center">
      <div class="card mb-3 me-2" style="flex-basis: 50vh; flex-grow:1;">
        <img src="images/berita1.jpg" class="card-img-top img-fluid" />
        <div class="card-body">
          <h5 class="card-title">Polusi Cahaya</h5>
          <p class="card-text">
            Kota manakah dengan polusi cahaya tertinggi?
          </p>
          <a
            href="https://www.liputan6.com/global/read/2529309/penduduk-negara-ini-hidup-dengan-polusi-cahaya-terparah-di-dunia">Link
            Eksternal</a>
        </div>
      </div>
      <div class="card mb-3 me-2" style="flex-basis: 50vh; flex-grow:1;">
        <img src="images/berita2.jpg" class="card-img-top img-fluid" />
        <div class="card-body">
          <h5 class="card-title">Tarif Listrik Per 1 November 2024</h5>
          <p class="card-text">
            Pemerintah telah menetapkan besaran tarif listrik yang berlaku mulai Jumat (1/11/2024).
          </p>
          <a
            href="https://www.kompas.com/tren/read/2024/10/22/063000565/rincian-tarif-listrik-yang-berlaku-per-1-november-2024">Link
            Eksternal</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection