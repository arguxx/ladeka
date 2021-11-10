@extends('layout.main')

@section('container')


<div class="card text-center mx-auto mt-5" style="width: 392px; border: 3px solid #333333;
box-sizing: border-box;
box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
border-radius: 29px; height:554px;">
    <div class="card-body mt-5">
      <img src="logo/logo.png" class="mb-5 mt-3" style="width: 150px" alt="">

<form class="my-auto">
  <div class="mb-3">
    <input type="text" class="form-control" id="# " placeholder="Masukan E-Mail">
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" id="#" placeholder="Masukan Password">
  </div>
<a href="#" style="color: black"><i>Forgot Password</i></a>
  <button type="submit" class="btn mt-3" style="width:257px;background: linear-gradient(90deg, #AF5AF2 20.35%, rgba(162, 72, 233, 0) 108.56%);
  border-radius: 15px;">Submit</button>
</form>
    </div>
  </div>
@endsection