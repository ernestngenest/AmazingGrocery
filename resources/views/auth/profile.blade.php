@extends('layout')

@section('content')
<div class="container-fluid text-center">
    <div class="row">
      <div class="col-4">
        <div>
            <img class="p-2 " style="height: 30em;width:auto" src="{{ file_exists(public_path('storage/'. $user->image)) ? asset('storage/'. $user->image) : asset('images/no-image.jpeg' )}}">
        </div>
      </div>
      <div class="col-8">
        <form method="POST" action="/profile/update/{{ auth()->user()->id }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="m-5 d-flex justify-content-end">
                        <label for="firstname" class="form-label">{{__('app.first name') }}</label>
                        <input name="first_name" type="text" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;"
                        value={{ $user->first_name }}>
                        @error('first_name')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-5 d-flex justify-content-end">
                        <label for="Email" class="form-label">{{ __('email') }}</label>
                        <input name="email" type="email" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;"
                        value={{ $user->email }}>
                        @error('email')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-5 d-flex justify-content-end">
                        @foreach ($genders as $gender)
                        <div class="form-check">
                            <input name="gender_id" class="form-check-input m-2" type="radio"  id="flexRadioDefault1" value="{{ $gender->id }}"
                            value={{ $user->gender_id }}>
                            <label class="form-check-label" for="flexRadioDefault1">
                              {{ $gender->gender_desc }}
                            </label>
                        </div>
                        @endforeach
                        @error('gender_id')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-5 d-flex justify-content-end">
                        <label for="password" class="form-label">{{ __('app.password') }}</label>
                        <input name="password" type="password" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;">
                        @error('password')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="m-5 d-flex justify-content-end">
                        <label for="last_name" class="form-label">{{ __('app.last name') }}</label>
                        <input name="last_name" type="text" class="form-control mx-3" id="exampleInputEmail1" style="width:35em;"
                        value={{ $user->last_name }}>
                        @error('last_name')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-5 d-flex justify-content-end">
                        <label for="last_name" class="form-label">{{ __('app.Role') }}</label>
                        <input type="text" name="role_id" class="form-control m-3" id="formGroupExampleInput2" value="{{ $user->roles->name}}" disabled>
                        @error('role_id')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div> 
                    <div class="m-5 d-flex justify-content-end">
                        <label for="formFileSm" class="form-label">{{ __('app.Display Picture') }}</label>
                        <input name="image" class="form-control form-control-sm mx-2" id="formFileSm" type="file" style="width: 40em">
                        @error('image')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>       
                    <div class="m-5 d-flex justify-content-end">
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
                    <button type="submit" class="btn btn-warning"> Save </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection