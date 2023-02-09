<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    {{-- {{ dd($roles) }} --}}
    <nav class="navbar" style="background-color: rgb(176,236,212)">
        <div class="container-fluid"> 
            <span class="mx-auto">
                <h1 class="navbar-brand mx-auto" style="font-size:5em">Amazing E-Grocery</h1>
            </span>
      </nav>
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col">
           <h1>{{ __('Register') }}</h1>
          </div>
          <form method="POST" action="/register/create" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="m-5 d-flex justify-content-center">
                        <label for="firstname" class="form-label">{{ __('app.first Name') }}</label>
                        <input name="first_name" type="text" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;">
                        @error('first_name')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-5 d-flex justify-content-center">
                        <label for="Email" class="form-label">{{ __('app.email') }}</label>
                        <input name="email" type="email" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;">
                        @error('email')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-5 d-flex justify-content-center">
                        @foreach ($genders as $gender)
                        <div class="form-check">
                            <input name="gender_id" class="form-check-input m-2" type="radio"  id="flexRadioDefault1" value="{{ $gender->id }}">
                            <label class="form-check-label" for="flexRadioDefault1">
                              {{ $gender->gender_desc }}
                            </label>
                        </div>
                        @endforeach
                        @error('gender_id')
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
                </div>
                <div class="col-6">
                    <div class="m-5 d-flex justify-content-center">
                        <label for="last_name" class="form-label">{{ __('app.last name') }}</label>
                        <input name="last_name" type="text" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;">
                        @error('last_name')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-5 d-flex justify-content-center">
                        <label for="last_name" class="form-label">{{ __('app.Role') }}</label>
                        <select name="role_id" class="form-select m-2" aria-label="Default select example" style="width: 15em">
                            <option selected>Select Gender</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div> 
                    <div class="m-5 d-flex justify-content-center">
                        <label for="formFileSm" class="form-label">{{ __('app.Display Picture')}}</label>
                        <input name="image" class="form-control form-control-sm mx-2" id="formFileSm" type="file" style="width: 40em">
                        @error('image')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>       
                    <div class="m-5 d-flex justify-content-center">
                        <label for="password" class="form-label">{{ __('app.password confirmation') }}</label>
                        <input name="password_confirmation" type="password" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;">
                        @error('password_confirmation')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>        
                </div>
                <div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-warning"> submit</button>
                    <x-localization></x-localization>
                </div>
            </div>
            <a href="/login" class="m-5"> already have acount? sign in </a>
        </form>
        </div>
      </div>
      <div class="p-3 bg-primary text-center text-white footer mt-5">
        FOOTER
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>