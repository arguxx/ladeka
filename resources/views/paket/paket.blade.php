@extends('layouts.app')
@section('container')
    <style>
        *{
            /* border: 1px solid blue; */
        }
    </style>
    <div class="containner mt-4 mx-5">
        <h1 class="text-center fs-2 mb-4">Paket Cuci Mobil Berlangganan</h1>
        <a href="{{ Route('pakett.create') }}" class="btn mx-auto mb-4" style="background-color: #9B51E0; border-radius: 10px; color: white; padding: 10px 20px;">Tambah Paket</a>
        <div class="card" style="width: 13rem; border-radius: 20px; border: 2px solid black;">
            <div class="card-body text-center">
                <p class="fw-bold fs-4">Silver</p>
                <br><br>
                <p>2x cuci/minggu</p>
                <p>Meguiar's Gold Class</p>
                <p>Diskon fogging 25%</p>
                <br><br>
                <p>Harga Perbulan</p>
                <p class="fw-bold">Rp. 300.000</p>
            </div>
        </div>
    </div>
@endsection