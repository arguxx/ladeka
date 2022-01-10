@extends('layouts.app')

@section('container')
<style>
  *{
      /* border: 1px solid blue; */
  }

  .search {
    position: relative;
    width:  30px;
    height: 30px;
    background: #fff;
    border-radius: 30px;
    transition: 0.5s;
    box-shadow: 0 0 0 3px #9B51E0;
    overflow: hidden;
  }

  .search.active {
    width: 360px;
  }

  .search .icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 30px;
    height: 30px;
    background: transparent;
    border-radius: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    cursor: pointer;
  }

  .search .icon::before {
    content: '';
    position: absolute;
    width: 15px;
    height: 15px;
    border: 3px solid #9B51E0;
    border-radius: 50%;
    transform: translate(-3px, -3px) rotate(315deg);
  }

  .search .icon::after {
    content: '';
    position: absolute;
    width: 3px;
    height: 8px;
    background: #9B51E0;
    transform: translate(5px, 5px) rotate(315deg);
  }

  .search .input {
    position: relative;
    width: 300px;
    height: 30px;
    left: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .search .input input {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    font-size: 18px;
    padding:0 40px;
  }

  .clear {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 15px;
    height: 15px;
    right: -10px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .clear::before {
    position: absolute;
    content: '';
    width: 1px;
    height: 15px;
    background: #999;
    transform: rotate(45deg);
  }

  .clear::after {
    position: absolute;
    content: '';
    width: 1px;
    height: 15px;
    background: #999;
    transform: rotate(315deg);
  }
</style>


 {{-- <form class="my-auto mb-3" action="{{ route('member.index') }}" method="GET" role="search">
  <input type="text" name="term" id="term" placeholder="Find Member">
  <button type="submit">find</button>
</form> --}}

<div id='back' class="container mx-auto">
  <button onclick="history.back()">
      <i class="fas fa-arrow-circle-left fa-2x px-3" ></i>
  </button>
  <div class="search mb-3" style="float: right;">
    <div class="icon"></div>
      <form action="{{ route('member.index') }}" method="GET" role="search" class="input">
        <input style="width: 360px" type="text" name="term" id="term">
        <span class="clear" onclick="document.getElementById('term').value = ''"></span>
      </form>
  </div>
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


{{-- <div class="search mb-3">
  <div class="icon"></div>
  <form action="{{ route('member.index') }}" method="GET" role="search">
    <input style="width: 360px" type="text" name="term" id="term">
    <span class="clear" onclick="document.getElementById('term').value = ''"></span>
  </form>
</div> --}}

{{-- <div class="search mb-3">
  <div class="icon"></div>
    <form action="{{ route('member.index') }}" method="GET" role="search" class="input">
      <input style="width: 360px" type="text" name="term" id="term">
      <span class="clear" onclick="document.getElementById('term').value = ''"></span>
    </form>
</div> --}}



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
        <td class="d-flex justify-content-evenly">
            <a href="{{ route('member.show' , $members->id) }}"><i class="fas fa-eye mx-3" style="color: purple;"></i></a>
            <a href="{{ route('member.edit' , $members->id) }}"><i class="fas fa-pen mx-3" style="color: purple;"></i></a>
            {{-- <form action="">
              <button onclick="return confirm('Apakah data yang akan Anda edit sudah benar?')"><i class="fas fa-pen mx-3" style="color: purple;"></i><button>
            </form> --}}
            <form method="POST" action="{{ url('member', $members->id ) }}">
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

  <script>
    const icon = document.querySelector('.icon');
    const search = document.querySelector('.search');
    icon.onclick = function() {
      search.classList.toggle('active')
    }
  </script>
@endsection