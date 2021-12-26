@extends('layouts.app')
@section('container')
<div class="card mx-auto mt-5 p-4 pt-3" style="width: 425px; border: 2.5px solid #333333; box-sizing: border-box; box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25); border-radius: 29px; height:554px;">
  <div class="card-body">
    <div class="container mx-auto">
      @if ($errors->any())
        <div class="mb-3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="my-auto" action="{{ route('member.store') }}" method="POST">
      @csrf
        <div class="mb-3">
        <x-label class="form-label fs-5" for="namaLengkap" ><strong>NAMA LENGKAP</strong></x-label>
          <x-input id="namaLengkap" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="namaLengkap" :value="old('namaLengkap')" required />
        </div>
        <div class="mb-3">
          <x-label class="form-label fs-5" for="tanggalLahir" ><strong>TANGGAL LAHIR</strong></x-label>
          <x-input id="tanggalLahir" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="tanggalLahir" :value="old('tanggalLahir')" required />
        </div>
        <div class="mb-3">
          <x-label class="form-label fs-5" for="noTelp" ><strong>NO. TELEPON</strong></x-label>
          <x-input id="noTelp" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="noTelp" :value="old('noTelp')" required />
        </div>
        <div class="mb-3">
          <x-label class="form-label fs-5" for="email" ><strong>E-MAIL</strong></x-label>
          <x-input id="email" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="email" :value="old('email')" required />
        </div>
        <x-button class="btn mt-4 mx-auto" style="display: block; background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">{{ __('Save') }}</x-button>
      </form>
    </div>
  </div>
</div>
@endsection