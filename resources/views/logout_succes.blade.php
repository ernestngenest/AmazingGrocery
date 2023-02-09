@extends('layout')

@section('content')
<div class="d-flex justify-content center" >
    <div class="mx-auto rounded-circle border-warning" style="padding:22em;border-style:solid;border-width: 20px;" >
        <h1 style="font-size:5em">{{ __('app.Log Out Succes') }}</h1>
        <a style="font-size:2em" href="/">{{__('app.click here to "Home') }}</a>
        <x-localization></x-localization>
    </div>
</div>
@endsection