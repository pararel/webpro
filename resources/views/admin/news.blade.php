@extends('layout.admin')

@section('btnBerita')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="py-2 px-4">
  @if (session('success'))
    <div>
    {{ session('success') }}
    </div>
  @endif
  @if ($errors->any())
    <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
  @endif
  <form action="{{route('adminNews')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
      <tr>
        <td>
          <label for="title" class="">Judul Berita:</label>
        </td>
        <td>
          <input type="text" class="bg-warning w-100" name="title" id="title" required />
        </td>
      </tr>
      <tr>
        <td>
          <label for="description" class="">Deskripsi Singkat:</label>
        </td>
        <td>
          <input type="text" class="bg-warning w-100" name="description" id="description" required />
        </td>
      </tr>
      <tr>
        <td>
          <label for="picture" class="">Unggah gambar:</label>
        </td>
        <td>
          <input type="file" class="" name="picture" id="picture" required />
        </td>
      </tr>
      <tr>
        <td>
          <label for="link" class="" id="labelAngkaTarget">Link
            eksternal:</label>
        </td>
        <td>
          <input type="text" class="bg-warning w-100" name="link" id="link" required />
        </td>
      </tr>
    </table>
    <button type="submit" class="btn btn-primary mt-3">
      Tambahkan
    </button>
  </form>
  <hr class="text-secondary" />
  @if ($news->isEmpty())
    <div class="d-flex justify-content-center">
    <p class="text-secondary">Belum ada berita yang dibuat</p>
    </div>
  @else
    @foreach ($news as $item) 
    <div class="container-fluid bg-white p-2 mb-2 shadow-sm d-flex justify-content-between">
    <span class="">{{ $item->title }} ({{ $item->created_at }})</span>
    <span>
      <form action="{{ route('adminNewsDelete', $item->id) }}" method="POST" style="display:inline;">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus berita ini?')">Delete</button>
    </span>
    </div>
  @endforeach
  @endif
</div>
@endsection