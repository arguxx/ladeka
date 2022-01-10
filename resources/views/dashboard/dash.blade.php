{{-- @extends('layouts.app')

@section('container')

    <div style="margin-top: 160px;" class="container text-center">
        <a href="{{ route('pakett.index') }}"><i style="margin-right: 100px; color: black;" class="fas fa-car fa-10x"></i></a>
        <a href="{{ route('member.index') }}"><i style="margin-right: 100px; color: black;" class="fas fa-address-card fa-10x"></i></a>
        <a href="{{ route('member.create') }}"><i class="fas fa-user-plus fa-10x" style="color: black;"></i></a>
    </div>
@endsection --}}

@extends('layouts.app')

@section('container')
    <style>
        *{
            /* border: 1px solid blue; */
        }

        a:hover {
            /* .menu {
                color: white;
            } */
            color: black;
            opacity: 0.6;
            /* width: 200px; */
            transition-duration: 0.2s;
        }
    </style>
    
    <div style="margin-top: 160px;" class="container text-center mb-5">
        <a href="{{ route('pakett.index') }}"><i style="margin-right: 100px;" class="menu fas fa-car fa-10x"></i></a>
        <a href="{{ route('member.index') }}"><i style="margin-right: 100px;" class="menu fas fa-address-card fa-10x"></i></a>
        <a href="{{ route('member.create') }}"><i class="menu fas fa-user-plus fa-10x" style=""></i></a>
    </div>
@endsection