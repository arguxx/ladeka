@extends('layouts.app')

@section('container')
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
@endsection

