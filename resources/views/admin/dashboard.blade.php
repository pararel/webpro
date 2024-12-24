@extends('layout.admin')

@section('btnMasukan')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="p-2">
  <div class="container-fluid">
    <div class="row text-center text-white bg-dark">
      <div class="col-3 border border-white py-1">
        Username
      </div>
      <div class="col-9 border border-white py-1">
        Masukan
      </div>
    </div>
    @foreach ($feedbacks as $feedback)
    <div class="row">
      <div class="col-3 border">
      {{ $feedback->user->username }}
      </div>
      <div class="col-9 border">
      {{ $feedback->message }}
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection