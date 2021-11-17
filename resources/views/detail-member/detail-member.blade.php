@extends('layout.main')

@section('container')
<p class="mx-5">dam tolong ganti font nya ya, lu lebih tau tentang perfontan duniawi (:</p>
<h2 class="mx-5"><strong>Detail Member</strong></h2>
<div class="container">
    <div class="card mx-4 mt-3" style="width: 397px;
    height: 249px; border: 3px solid #333333;
    box-sizing: border-box;
    box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
    border-radius: 29px;">
        <div class="card-body mx-3 mt-3" style="font-size: 20px">
            <p>Nama Lengkap: Ardian Adam</p>
            <p>Jenis Kelamin: Laki - laki</p>
            <p>No Telepon: 081956789423</p>
            <p>Email: Ardian@gmail.com</p>
        </div>
    </div>
    <button type="submit" class="btn mx-4 mt-4" style="color:white; width:210px; height: 50px; background: #9B51E0; border-radius:9px;"
    border-radius: 15px;">+ Tambah Transaksi</button>
    <table class="table mt-4 mx-4 table-bordered border-dark text-center table-responsive-sm">
        <thead>
          <tr style="background-color:#9B51E0; color:white;">
            <th scope="col">Nor</th>
            <th scope="col">Paket</th>
            <th scope="col">Merk Mobil</th>
            <th scope="col">Tipe Mobil</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody style="background-color:white;">
          <tr>
            <th>696969</th>
            <td>Argian Radity</td>
            <td>089897123</td>
            <td>089897123</td>
            <td>089897123</td>
            <td><img src="img/bin.png" alt="" class="mx-3" style="width:23px; "></td>
          </tr>
          <tr>
            <th>696969</th>
            <td>Argian Radity</td>
            <td>089897123</td>
            <td>089897123</td>
            <td>089897123</td>
            <td><img src="img/bin.png" alt="" class="mx-3" style="width:23px; "></td>
          </tr>
        </tbody>
      </table>
</div>
@endsection