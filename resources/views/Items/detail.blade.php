@extends('layout')

@section('content')
<div class="container text-center">
    @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
    <div class="row">
      <div class="col-4">
        <div class=" ">
            <div>
                <h1>{{ $item->item_name }}</h1>
            </div>
                <img class="rounded-circle mb-2" style="height: 20em;width: 20em" src={{ $item->image }}>
            </div>
      </div>
      <div class="col-8">
        <div class="m-5">
            <div>
                Price : Rp. {{ $item->price}}
            </div>
            <div class="m-5">
                {{ $item->item_desc }}
            </div>
            <div class="m-5">
                <a href="/buy/{{ $item->id }}" class="btn btn-warning">BUY</a>
            </div>
        </div>
      </div>
    </div>
    <div>
@endsection