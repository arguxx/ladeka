<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>
        Ladeka
        </title>
    </head>
    <body>

        <div class="container">
            <div class="card text-center mx-auto mt-5" style="width: 425px; border: 2.5px solid #333333;
            box-sizing: border-box;
            box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.25);
            border-radius: 29px; height:554px;">
            
            <div class="card-body mt-4 mx-3">
                <img src="logo/logo.png" class="mb-5 mt-3" style="width: 150px" alt="">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" style="color: red" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" style="color: red" :errors="$errors" />
                <form class ="my-auto" method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="mb-3">
                    <input type="text" 
                    style="padding: 15px 20px; border-radius: 8px; box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.2);" 
                    class="form-control border-dark" 
                    id="#"
                    type="email"
                    name="email" :value="old('email')" required autofocus
                    placeholder="Masukan Email">
                </div>
                <div class="mb-4">
                    <input type="password"
                    style="padding: 15px 20px; border-radius: 8px; box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.2);"
                    class="form-control border-dark"
                    id="password" 
                    placeholder="Masukkan Password"
                    type="password"
                    name="password"
                    required autocomplete="current-password">
                </div>
                {{-- <a href="#" style="color: black"><i>Forgot Password</i></a> --}}
                @if (Route::has('password.request'))
                    <a class="underline italic" style="color: black" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
                <br>
                <button type="submit" class="btn mt-4" style="background-color: #9B51E0; border-radius: 10px; color: white; padding: 15px 45px;">Login</button>
                </form>
            </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
