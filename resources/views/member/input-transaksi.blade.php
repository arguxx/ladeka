{{-- @extends('layouts.app')

@section('container')
<div class="card mx-auto mt-5 mb-5 p-4 pt-3" style="width: 425px; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px;">
  <div class="card-body">
    @if ($errors->any())

    <div class="mb-3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong>Something Went Wrong</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
@endif

    <form class="my-auto" action="{{ route('transaksi.store') }}" method="POST">
      <div class="input-group mb-3">
        <label for="#" class="form-label fs-5"><strong>PAKET</strong></label>
        <select class="custom-select w-100 p-0 pb-1 mb-3" id="#" style="border: 0; border-bottom: 1px solid black;">
            <option selected>Pilih Paket</option>
            @foreach ($paket as $paket)
            <option value="2">{{ $paket->namaPaket }}</option>
            @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="merkMobil" class="form-label fs-5"><strong>MERK MOBIL</strong></label>
        <input id="merkMobil" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="merkMobil" :value="old('merkMobil')" placeholder="Masukkan Merk Mobil" required />

      </div>
      <div class="mb-3">
        <label for="tipeMobil" class="form-label fs-5"><strong>TIPE MOBIL</strong></label>
        <input id="tipeMobil" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="tipeMobil" :value="old('tipeMobil')" placeholder="Masukkan Tipe Mobil" required />
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label fs-5"><strong>HARGA</strong></label>
        <input id="harga" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="harga" :value="old('harga')" placeholder="Masukan Harga Mobil" required />
      </div>
      <button class="btn mt-4 mx-auto" style="display: block; background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">{{ __('Save') }}</button>

    </form>
  </div>
</div>
@endsection --}}

