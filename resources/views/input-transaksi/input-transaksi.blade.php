@extends('layout.main')

@section('container')
<div class="card text-left mx-auto mt-3" style="width: 392px; border: 3px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px; height:554px;">
    <div class="card-body mx-5 mt-4">
<form class="my-auto">
  <div class="mb-3 mt-4">
    <label for="#" class="form-label"><strong>PAKET</strong></label>
    <input list="Paket" class="form-control" style="border: 0; " placeholder="Nama Paket">
    <datalist id="Paket">
        <option value="Gold">
        <option value="Diamond">
        <option value="Silver">
        <option value="Bronze">
      </datalist> 
  </div>
  <div class="mb-3">
    <label for="#" class="form-label"><strong>MERK MOBIL</strong></label>
    <input type="text" class="form-control" id="#" style="border: 0;" placeholder="Harga">
  </div>
  <div class="mb-3">
    <label for="#" class="form-label"><strong>TIPE MOBIL</strong></label>
    <input type="text" class="form-control" id="#" style="border: 0;" placeholder="Harga">
  </div>
  <div class="mb-3">
    <label for="#" class="form-label"><strong>HARGA</strong></label>
    <input type="text" class="form-control" id="#" style="border: 0;" placeholder="Deskripsi">
  </div>

  <button type="submit" class="btn" style="width:257px;background: linear-gradient(90deg, #AF5AF2 20.35%, rgba(162, 72, 233, 0) 108.56%);
  border-radius: 15px;">Submit</button>
</form>
    </div>
  </div>
@endsection