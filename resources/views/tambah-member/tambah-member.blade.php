@extends('layout.main')

@section('container')
<div class="card mx-auto mt-5 p-4 pt-3" style="width: 425px; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px; height:554px;">
  <div class="card-body">
    <form class="my-auto">
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>NAMA LENGKAP</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Nama Lengkap">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>TANGGAL LAHIR</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Tanggal Lahir">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>NO. TELEPON</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan No. Telepon">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>E-MAIL</strong></label>
        <input type="email" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan E-mail">
      </div>

      <button type="submit" class="btn mt-4 mx-auto" style="display: block; background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">Tambah</button>
    </form>
  </div>
</div>
@endsection