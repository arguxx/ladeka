@extends('layouts.app')

@section('container')
<br>
<br>
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
        <th>{{$member->kodeUnik}}</th>
        <td>{{$member->namaLengkap}}</td>
        <td>{{$member->tanggalLahir}}</td>
        <td>{{$member->noTelp}}</td>
        <td>{{$member->email}}</td>
        <td>
            <a href="{{ route('member.show' , $member->id) }}"><i class="fas fa-eye mx-3" style="color: purple;"></i></a>
            <form style="display:inline;" method="POST" action="{{ url('member', $member->id ) }}">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mx-3" style="color: purple;"></i><button>
            </form>
      </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection

