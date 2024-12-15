@extends('layout.admin')

@section('btnMasukan')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="p-2">
  <ul>
    @foreach ($feedbacks as $feedback) 
    <li><strong>{{ $feedback->user->username }}:</strong> {{ $feedback->message }}</li>
  @endforeach
  </ul>
</div>
@endsection