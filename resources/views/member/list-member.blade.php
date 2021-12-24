@extends('layouts.app')

@section('container')
<h2 class="mt-5 mb-3">List Member</h2>
<table class="table table-bordered border-dark text-center table-responsive-sm w-100">
    <thead>
      <tr style="background-color:#9B51E0; color:white;">
        <th scope="col">Id Member</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">No. Telepon</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody style="background-color:white;">
      @foreach($member as $member)       
      <tr>
        <th>{{$member->id}}</th>
        <td>{{$member->namaLengkap}}</td>
        <td>{{$member->tanggalLahir}}</td>
        <td>{{$member->noTelp}}</td>
        <td>{{$member->email}}/td>
        <td><a href="/detail-member"><i class="fas fa-eye mx-3" style="color: purple;"></i></a><a href=""><i class="fas fa-trash-alt mx-3" style="color: purple;"></i></a></td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection