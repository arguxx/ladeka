@extends('layout.main')

@section('container')
    <style>
        *{
            /* border: 1px solid blue; */
        }
    </style>
    <div style="margin-top: 160px;" class="containner mx-5 text-center">
        <a href="/paket"><i style="margin-right: 100px; color: black;" class="fas fa-car fa-10x"></i></a>
        <a href="/list-member"><i style="margin-right: 100px; color: black;" class="fas fa-address-card fa-10x"></i></a>
        <a href="/tambah-member"><i class="fas fa-user-plus fa-10x" style="color: black;"></i></a>
    </div>
@endsection