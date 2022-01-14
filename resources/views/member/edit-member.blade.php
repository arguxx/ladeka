@extends('layouts.app')

@section('container')

<style>
  #btn_tambah {
    display: block; 
    background-color: #9B51E0; 
    border: 2px solid #9B51E0; 
    border-radius: 10px; 
    color: white; 
    padding: 15px 45px;
  }

  #btn_tambah:hover {
    color: #9B51E0;
    background-color: transparent;
  }
</style>

<div id='back' class="container mx-auto">
  <button onclick="history.back()">
      <i class="fas fa-arrow-circle-left fa-2x px-3" ></i>
  </button>
</div>
<script>
  function back() {
  var x = document.getElementById("back");
  if (window.location.href === "ladekaf.test/dashboard") {
  x.style.display = "none";
  } else {
  x.style.display = "block";
  }
}
back()
</script>

<div class="card mx-auto mt-5 mb-5 p-4 pt-3" style="width: 425px; border: 2.5px solid #333333; box-sizing: border-box; box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25); border-radius: 29px;">
  <div class="card-body">
    <div class="container mx-auto">
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
      <div class="text-center mb- mx-auto">
        <p for="nama" class="inline-block mr-6 text-center font-bold text-gray-600">Last Update: {{$member->updated_at}}</p>
    </div><br>
      <form class="my-auto" action="{{ route('member.update', $member->id) }}" method="POST">
      @csrf
      @method('PUT')
        <div class="mb-3">
        <label class="form-label fs-5" for="namaLengkap" ><strong>NAMA LENGKAP</strong></label>
          <input id="namaLengkap" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="namaLengkap" :value="old('namaLengkap')" value="{{ $member->namaLengkap }}" />
        </div>
        <div class="mb-3">
          <label class="form-label fs-5" for="tanggalLahir" ><strong>TANGGAL LAHIR</strong></label>
          <input id="tanggalLahir" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="date" name="tanggalLahir" :value="old('tanggalLahir')" value="{{ $member->tanggalLahir }}" />
        </div>
        <div class="mb-3">
          <label class="form-label fs-5" for="noTelp"><strong>NO. TELEPON</strong></label>
          <div class="d-flex">
            <div class="nol mr-3 mb-3 px-2 py-1 fw-bold">+62</div>
            <input id="noTelp" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="tel" name="noTelp" :value="old('noTelp')" value="{{ $member->noTelp }}" required />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label fs-5" for="email" ><strong>E-MAIL</strong></label>
          <input id="email" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="email" :value="old('email')" value="{{ $member->email }}" />
        </div>
        <button id="btn_tambah" type="submit" class="btn mt-5 mx-auto" style="">Tambah</button>
      </form>
    </div>
  </div>  
</div>

@endsection

