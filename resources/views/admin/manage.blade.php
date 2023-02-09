@extends('layout')

@section('content')
@if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
<table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">{{ __('app.Acount') }}</th>
        <th scope="col">{{ __('app.Action') }}</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="text-center">
                <td>{{ $user->id }} - {{ $user->first_name }} {{ $user->last_name }} - {{ $user->roles->name }}</td>
                <td><a class="" href="/admin/role/edit/{{ $user->id }}"> {{ __('app.update role') }} </a>
                    <form action="/admin/delete/{{ $user->id }}" method="POST">
                      @csrf
                      @method('delete')
                       <button type="submit">{{__('app.Delete') }}</button>
                    </form>
                  </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection