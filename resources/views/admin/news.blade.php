@extends('layout.admin')

@section('btnBerita')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="py-2 px-4">
  <form id="postForm">
    <table>
      <tr>
        <td>
          <label for="judul" class="">Judul Berita:</label>
        </td>
        <td class="">
          <input type="text" class="bg-warning w-100" name="judul" id="judul" required />
        </td>
      </tr>
      <tr>
        <td>
          <label for="isiBerita" class="">Deskripsi Singkat:</label>
        </td>
        <td>
          <input type="text" class="bg-warning w-100" name="isiBerita" id="isiBerita" required />
        </td>
      </tr>
      <tr>
        <td>
          <label for="gambar" class="">Unggah gambar:</label>
        </td>
        <td>
          <input type="file" class="" name="gambar" id="gambar" accept="image/*" required />
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
    <button type="button" id="postBtn" class="btn btn-primary mt-3">
      Tambahkan
    </button>
  </form>
  <hr class="text-white" />
  <div class="noPostTarget d-flex justify-content-center">
    <span class="text-white">Belum ada berita yang dibuat</span>
  </div>
  <div id="postContainer"></div>
  <div id="confirmDialog" class="modal" tabindex="-1" style="display: none">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Konfirmasi Hapus</h5>
        </div>
        <div class="modal-body">
          <p>Apakah kamu yakin ingin menghapus ini?</p>
        </div>
        <div class="modal-footer">
          <button id="confirmYes" class="btn btn-danger">Ya</button>
          <button id="confirmNo" class="btn btn-secondary" data-dismiss="modal">
            Tidak
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection