@extends('layout')

@section('content')
<div class="d-flex justify-content center" >
    <div class="mx-auto rounded-circle border-warning" style="padding:22em;border-style:solid;border-width: 20px;" >
        <h1 style="font-size:5em">{{ __('app.SUCCES') }}</h1>
        <h3>{{ __('app.We will Contact you 1x24 hours') }}</h3>
        <a style="font-size:2em" href="/home">{{__('app.click here to "Home') }}</a>
        <x-localization></x-localization>
    </div>
</div>
@endsection