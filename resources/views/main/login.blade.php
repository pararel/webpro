@extends('layout.account')

@section('title')
Login
@endsection

@section('login')
active
@endsection

@section('judulForm')
Masuk Akun
@endsection

@section('form')
<form action="{{ route('login') }}" method="POST">
  @csrf
  <div>
    <input class="form-control mb-2 rounded-5" type="text" id="username"name="username" value="" placeholder="Username" required/>
  </div>
  <div>
    <input class="form-control mb-3 rounded-5" type="password" id="password" name="password" value="" placeholder="Password" required/>
  </div>
  <button class="masuk btn btn-warning my-3 w-100 rounded-5" type="submit">
    Masuk
  </button>
  <p class="mb-2 d-flex justify-content-center">
    Belum punya akun?
    <a href="{{route('signup')}}"> Sign Up </a>
  </p>
</form>
@endsection
