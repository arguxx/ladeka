@extends('layouts.app')

@section('container')
<div class="card mx-auto mt-5 mb-5 p-4 pt-3" style="width: 425px; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px;">
  <div class="card-body">
    <form class="my-auto">
      <div class="input-group mb-3">
        <label for="#" class="form-label fs-5"><strong>PAKET</strong></label>
        <!-- <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
        </div> -->
        <select class="custom-select w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;">
            <option selected>Pilih Paket</option>
            <option value="1">Paket 1</option>
            <option value="2">Paket 2</option>
            <option value="3">Paket 3</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>NAMA {{$member->namaLengkap}}</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="{{ $member->namaLengkap }}">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>MERK MOBIL</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Merk Mobil">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>TIPE MOBIL</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Tipe Mobil">
      </div>
      <div class="mb-3">
        <label for="#" class="form-label fs-5"><strong>HARGA</strong></label>
        <input type="text" class="form w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;" placeholder="Masukkan Harga">
      </div>

      <button type="submit" class="btn mt-4 mx-auto" style="display: block; background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">Tambah</button>
    </form>
  </div>
</div>
@endsection