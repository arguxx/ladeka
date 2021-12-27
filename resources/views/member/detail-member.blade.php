@extends('layouts.app')

@section('container')
<div class="card mt-5 mb-4 p-4 pt-3" style="width: 500px; border: 2.5px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px;">
    <table>
        <tr>
            <td class="p-2">Nama Lengkap</td>
            <td class="p-2">: {{$member->namaLengkap}}</td>
        </tr>
        <tr>
            <td class="p-2">Tanggal Lahir</td>
            <td class="p-2">: {{$member->tanggalLahir}}</td>
        </tr>
        <tr>
            <td class="p-2">No. Telepon</td>
            <td class="p-2">: {{$member->noTelp}}</td>
        </tr>
        <tr>
            <td class="p-2">E-mail</td>
            <td class="p-2">: {{$member->email}}</td>
        </tr>
    </table>
</div>
<a href="/input-transaksi" class="btn mx-auto mb-4" style="background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">Tambah Transaksi</a>
<table class="table table-bordered border-dark text-center table-responsive-sm w-100">
    <thead>
      <tr style="background-color:#9B51E0; color:white;">
        <th scope="col">No.</th>
        <th scope="col">Paket</th>
        <th scope="col">Merk Mobil</th>
        <th scope="col">Tipe Mobil</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody style="background-color:white;">
      <tr>
        <td>1</td>
        <td>Paket 1</td>
        <td>Merk Mobil</td>
        <td>Tipe Mobil</td>
        <td>IDR xxxxxxx</td>
        <td><a href=""><i class="fas fa-trash-alt" style="color: purple;"></i></a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Paket 1</td>
        <td>Merk Mobil</td>
        <td>Tipe Mobil</td>
        <td>IDR xxxxxxx</td>
        <td><a href=""><i class="fas fa-trash-alt" style="color: purple;"></i></a></td>
      </tr>
    </tbody>
</table>
@endsection