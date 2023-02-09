@extends('layout')

@section('content')
    <div class="m-5">
        <h1>{{ $curr->first_name }} {{ $curr->last_name }}</h1>
    </div>
    <div>
        <form action="/admin/role/update/{{ $curr->id }}" method="post">
            @csrf
            <div class="d-flex m-5">
                {{ __('app.Role') }}: 
                <select name="role_id" class="form-select mx-4" aria-label="Default select example">
                    @foreach ($roles as $role)
                        <option  style="width:9em" value={{ $role->id }}>{{ $role->name }}</option>
                    @endforeach
                  </select>
            </div>
            <div class="d-flex justify-content-center ">
                <button type="submit" class="btn btn-warning">{{ _('app.Save') }}</button>
            </div>
        </form>
    </div>
@endsection
