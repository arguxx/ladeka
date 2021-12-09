@extends('layout.main')

@section('container')
<div class="card mx-auto mt-5 p-4 pt-5" style="width: 425px; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px; height:554px;">
  <div class="card-body">
    <form class="my-auto">
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>NAMA PAKET</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Nama Paket">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>HARGA</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Harga">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>DESKRIPSI</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Deskripsi">
      </div>

      <button type="submit" class="btn mt-5 mx-auto" style="display: block; background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">Tambah</button>
    </form>
  </div>
</div>
@endsection