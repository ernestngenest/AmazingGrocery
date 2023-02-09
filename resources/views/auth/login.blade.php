<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar" style="background-color: rgb(176,236,212)">
        <div class="container-fluid"> 
            <span class="mx-auto">
                <h1 class="navbar-brand mx-auto" style="font-size:5em">{{ __('app.Amazing E-Grocery') }}</h1>
            </span>
    </nav>
    <div>
        <form action="/login/create" method="POST">
            @csrf
            <h1 class="m-5 d-flex justify-content-center">{{ __('app.login') }}</h1>
            <div class="m-5 d-flex justify-content-center">
                <label for="Email" class="form-label">{{ __('app.email') }}</label>
                <input name="email" type="email" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;">
                @error('email')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="m-5 d-flex justify-content-center">
                <label for="password" class="form-label">{{ __('app.password') }}</label>
                <input name="password" type="password" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;">
                @error('password')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="m-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-warning"> submit </button>
                <x-localization></x-localization>
            </div>
        </form>
    </div>
    <div class="p-3 bg-primary text-center text-white footer mt-5">
       2440008821
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>