@extends('layout.user')

@section('btnTarget')
text-warning text-secondary fw-bold
@endsection

@section('content')
<div class="p-2">
  <form id="postForm">
    <table>
      <tr>
        <td>
          <label for="golongan" class="">Golongan Rumah Tangga:</label>
        </td>
        <td>
          <select class="bg-warning w-100" name="golongan" id="golongan">
            <option value="1352">R-1/ TR daya 900 VA</option>
            <option value="1444.7">R-1/ TR daya 1.300 VA</option>
            <option value="1444.7">R-1/ TR daya 2.200 VA</option>
            <option value="1699.53">
              R-2/ TR daya 3.500-5.500 VA
            </option>
            <option value="1699.53">
              R-3/ TR daya 6.600 VA ke atas
            </option>
            <option value="1444.7">
              B-2/ TR daya 6.600 VA-200 kVA
            </option>
            <option value="1114.74">
              B-3/ Tegangan Menengah (TM) daya di atas 200 kVA
            </option>
            <option value="1114.74">
              I-3/ TM daya di atas 200 kVA
            </option>
            <option value="996.74">
              I-4/ Tegangan Tinggi (TT) daya 30.000 kVA ke atas
            </option>
            <option value="1699.53">
              P-1/ TR daya 6.600 VA-200 kVA
            </option>
            <option value="1522.88">
              P-2/ TM daya di atas 200 kVA
            </option>
            <option value="1699.53">
              P-3/ TR untuk penerangan jalan umum
            </option>
            <option value="1644.52">L/ TR, TM, TT</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="parameter" class="">Parameter target:</label>
        </td>
        <td>
          <select class="bg-warning" name="parameter" id="parameter">
            <option value="target-pemakaian">
              Pemakaian Listrik
            </option>
            <option value="hitung-pemakaian">Biaya Listrik</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="tanggal-awal" class="">Waktu mulai:</label>
        </td>
        <td>
          <input type="date" class="bg-warning" name="tanggal-awal" id="tanggal-awal" required />
        </td>
      </tr>
      <tr>
        <td>
          <label for="tanggal-akhir" class="">Target waktu:</label>
        </td>
        <td>
          <input type="date" class="bg-warning" name="tanggal-akhir" id="tanggal-akhir" required />
        </td>
      </tr>
      <tr>
        <td>
          <label for="angka-target" class="" id="labelAngkaTarget">Target daya (kWh):</label>
        </td>
        <td>
          <input type="text" class="bg-warning" name="angka-target" id="angka-target" inputmode="numeric"
            oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
        </td>
      </tr>
    </table>
    <button type="button" id="postBtn" class="btn btn-primary mt-3">
      Tambahkan
    </button>
  </form>
  <hr class="text-wrning" />
  <div class="noPostTarget d-flex justify-content-center">
    <span class="text-secondary">Belum ada target yang dibuat</span>
  </div>
</div>
@endsection

@section('script')
<script>
  $document.ready(function () {
    $("#parameter").change(function () {
      var parameter = $(this).val();
      if (parameter === "target-pemakaian") {
        $("#labelAngkaTarget").text("Target daya (kWh):");
      } else if (parameter === "hitung-pemakaian") {
        $("#labelAngkaTarget").text("Target biaya (Rupiah):");
      }
    });
  });
</script>
@endsection