@extends('layout.main')

@section('container')
<div class="card text-left mx-auto mt-5" style="width: 392px; border: 3px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px; height:554px;">
    <div class="card-body">
<form class="my-auto">
  <div class="mb-3">
    <label for="#" class="form-label"><strong>NAMA PAKET</strong></label>
    <input type="email" class="form-control" id="#" style="border: 0; " placeholder="Nama Paket">
  </div>
  <div class="mb-3">
    <label for="#" class="form-label"><strong>HARGA</strong></label>
    <input type="email" class="form-control" id="#" style="border: 0;" placeholder="Harga">
  </div>
  <div class="mb-3">
    <label for="#" class="form-label"><strong>DESKRIPSI</strong></label>
    <input type="email" class="form-control" id="#" style="border: 0;" placeholder="Deskripsi">
  </div>

  <button type="submit" class="btn" style="width:257px;background: linear-gradient(90deg, #AF5AF2 20.35%, rgba(162, 72, 233, 0) 108.56%);
  border-radius: 15px;">Submit</button>
</form>
    </div>
  </div>
@endsection