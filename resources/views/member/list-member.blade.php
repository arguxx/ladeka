@extends('layouts.app')

@section('container')
<br>
<br>


<form class="my-auto" action="{{ route('member.index') }}" method="GET" role="search">
  <input type="text" name="term" id="term" placeholder="Find Member"">
  <button type="submit">find</button>
</form>


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
      @foreach($member as $members)       
      {{-- <livewire:member-single :member="$member" :key="$member->id"/> --}}
      <tr>
        <th>{{$members->kodeUnik}}</th>
        <td>{{$members->namaLengkap}}</td>
        <td>{{$members->tanggalLahir}}</td>
        <td>{{$members->noTelp}}</td>
        <td>{{$members->email}}</td>
        <td>
            <a href="{{ route('member.show' , $members->id) }}"><i class="fas fa-eye mx-3" style="color: purple;"></i></a>
            <form style="display:inline;" method="POST" action="{{ url('member', $members->id ) }}">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mx-3" style="color: purple;"></i><button>
            </form>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="div">
    {{ $member->links() }}
  </div>


@endsection

