@extends('layouts.app')

@section('container')
<style>
        *{
            /* border: 1px solid blue; */
        }
    </style>
{{-- <input hidden value="{{ $member->id }}" name="idmemb" id="idmemb"/> --}}

<div class="row d-flex justify-content-between py-5">
<div class="card p-4 pt-3" style="width: 60%; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px;">
    <table class="my-auto">
        <tr>
            <td class="px-2 py-4 fs-5 fw-bold">Nama Lengkap</td>
            <td class="px-2 py-4 fs-5 fw-bold">: {{$member->namaLengkap}}</td>
        </tr>
        <tr>
            <td class="px-2 py-4 fs-5 fw-bold">Tanggal Lahir</td>
            <td class="px-2 py-4 fs-5 fw-bold">: {{$member->tanggalLahir}}</td>
        </tr>
        <tr>
            <td class="px-2 py-4 fs-5 fw-bold">No. Telepon</td>
            <td class="px-2 py-4 fs-5 fw-bold">: {{$member->noTelp}}</td>
        </tr>
        <tr>
            <td class="px-2 py-4 fs-5 fw-bold">E-mail</td>
            <td class="px-2 py-4 fs-5 fw-bold">: {{$member->email}}</td>
        </tr>
    </table>
</div>
<div class="card p-4 pt-3" style="width: 30%; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px;">
  <div class="card-body">

    <form class="my-auto" action="{{ route('transaksi.store') }}" method="POST">
      @csrf
      <div class="input-group mb-3">
        <label for="tipePaket" class="form-label fs-5"><strong>PAKET</strong></label>
      <select class="custom-select w-100 p-0 pb-1 mb-3" name="tipePaket" id="tipePaket" style="border: 0; border-bottom: 1px solid black;">
          @foreach ($paket as $paket)
          <option value="{{ $paket->namaPaket }}">{{ $paket->namaPaket }}</option>
          @endforeach
      </select>
      </div>
      <div class="mb-3">
        <label for="merkMobil" class="form-label fs-5"><strong>MERK MOBIL</strong></label>
        <input id="merkMobil" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="merkMobil" :value="old('merkMobil')" placeholder="Masukkan Merk Mobil" required />
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label fs-5"><strong>HARGA</strong></label>
        <input id="harga" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="harga" :value="old('harga')" placeholder="Masukan Harga Mobil" required />
      </div>
      <input hidden value="{{ $member->id }}" name="idmemb" id="idmemb"/>
      <button class="btn mt-4 mx-auto" style="display: block; background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">{{ __('Save') }}</button>
    </form>
  </div>
</div>
</div>
<table class="table table-bordered border-dark text-center table-responsive-sm w-100">
    <thead>
      <tr style="background-color:#9B51E0; color:white;">
        <th scope="col">Tanggal Berlangganan.</th>
        <th scope="col">Paket</th>
        <th scope="col">Merk Mobil</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody style="background-color:white;">
      @foreach ($trans as $trans)   
      <tr>
        <td>{{ $trans->created_at }}</td>
        <td>{{ $trans->tipePaket }}</td>
        <td>{{ $trans->merkMobil }}</td>
        <td>IDR {{ $trans->harga }}</td>
        <td>
          <form style="display:inline;" method="POST" action="{{ url('transaksi', $trans->id ) }}">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mx-3" style="color: purple;"></i><button>
          </form>  
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection
