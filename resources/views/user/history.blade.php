@extends('layout.user')

@section('btnRiwayat')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="fitur riwayat p-2">
  <div class="noPostRiwayat d-flex justify-content-center">
    <span class="text-secondary">Anda belum melakukan apa-apa</span>
  </div>
  <div id="postContainerRiwayat" class="overflow-y-auto" style="height: 60vh"></div>
</div>
@endsection