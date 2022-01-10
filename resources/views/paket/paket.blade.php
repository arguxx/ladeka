{{-- @extends('layouts.app')

@section('container')

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

    <div class="containner mt-4 mx-5 mb-5 ">
        <h1 class="text-center fs-2 mb-4 fw-bold">Paket Cuci Mobil Berlangganan</h1>
        <a href="{{ Route('pakett.create') }}" class="btn mx-auto mb-4" style="background-color: #9B51E0; border-radius: 10px; color: white; padding: 10px 20px;">Tambah Paket</a>
        <div class="row d-flex justify-content-evenly">
            @foreach ($paket as $paket)
                <div class="card mr-5 mb-4" style="width: 13rem; border-radius: 20px; border: 2px solid black;">
                    <div class="card-body text-center">
                        <p class="fw-bold fs-4">{{ $paket->namaPaket }}</p>
                        <br><br>
                        <p>{{ $paket->deskripsi }}</p>
                        <p>{{ $paket->deskripsi1 }}</p>
                        <p>{{ $paket->deskripsi2 }}</p>
                        <br><br>
                        <p>Harga Perbulan</p>
                        <p class="fw-bold">Rp. {{ $paket->harga }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection --}}

@extends('layouts.app')
@section('container')
    <style>
        *{
            /* border: 1px solid blue; */
        }
    </style>
    <div class="containner mt-4 mb-5 mx-5">
        <h1 class="text-center fs-2 mb-4 fw-bold">Paket Cuci Mobil Berlangganan</h1>
        <a href="/input-paket" class="btn mx-auto mb-4" style="background-color: #9B51E0; border-radius: 10px; color: white; padding: 10px 20px;">Tambah Paket</a>
        <div class="row d-flex justify-content-evenly">
                @foreach ($paket as $paket)          
                    <div class="card m-4" style="width: 13.5rem; border-radius: 20px; border: 2px solid black; background-color: white;">
                            <div class="card-body text-center">
                                <p class="fw-bold fs-4">{{ $paket->namaPaket }}</p>
                            <br><br>
                            <p>{{ $paket->deskripsi }}</p>
                            <p>{{ $paket->deskripsi1 }}</p>
                            <p>{{ $paket->deskripsi2 }}</p>
                            <br><br>
                            <p>Harga Perbulan</p>
                            <p class="fw-bold">Rp. {{ $paket->harga }}</p>
                            <div class="d-flex mx-auto pt-4">
                                <form method="POST" action="">
                                    <button class="btn btn-success mx-2">Edit<button>
                                    </form>
                                    <form method="POST" action="">
                                        <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger ml-1">Delete<button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach
        </div>
    </div>
@endsection

