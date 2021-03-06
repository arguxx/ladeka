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

<div class="card mx-auto mt-5 mb-5 p-4 pt-5" style="width: 425px; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px;">
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

  <div class="card-body">
    <form class="my-auto" action="{{ route('pakett.update', $pakett->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="mb-3">
        <label class="form-label fs-5" for="namaPaket" ><strong>NAMA PAKET</strong></label>
          <input id="namaPaket" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="namaPaket" :value="old('namaPaket')" value="{{ $pakett->namaPaket }}" required />
        </div>
        <div class="mb-3">
          <label class="form-label fs-5" for="harga" ><strong>HARGA</strong></label>
          <input id="harga" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="text" name="harga" :value="old('harga')" value="{{ $pakett->harga }}" required />
        </div>
        <div class="mb-3">
          <label class="form-label fs-5" for="deskripsi" ><strong>DESKRIPSI 1</strong></label>
          <input id="deskripsi" class="form w-100 p-0 pb-1 mb-3" style="border: 0; border-bottom: 1px solid black;" type="textarea" name="deskripsi" :value="old('deskripsi')" value="{{ $pakett->deskripsi }}" required />
        </div>
        <div class="mb-3">
          <label for="deskripsi1" class="form-label fs-5"><strong>DESKRIPSI 2 (optional)</strong></label>
          <input type="text" class="form w-100 p-0 pb-1 mb-3" id="deskripsi1" style="border: 0; border-bottom: 1px solid black;" name="deskripsi1" :value="old('deskripsi1')" value="{{ $pakett->deskripsi1 }}">
        </div>
        <div class="mb-3">
          <label for="deskripsi2" class="form-label fs-5"><strong>DESKRIPSI 3 (optional)</strong></label>
          <input type="text" class="form w-100 p-0 pb-1 mb-3" id="deskripsi2" style="border: 0; border-bottom: 1px solid black;" name="deskripsi2" :value="old('deskripsi2')" value="{{ $pakett->deskripsi2 }}">
        </div>

        <button id="btn_tambah" type="submit" class="btn mt-5 mx-auto" style="">Tambah</button>
      </form>
  </div>
</div>
@endsection