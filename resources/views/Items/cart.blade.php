@extends('layout')

@section('content')

    @if(!$orders->count())
    <div>
        <p style="font-size:5em">{{ __('app.cart is empty! Let’s go shopping :)') }}</p>
    </div>
    @else
    <h1 class="m-5" style="font-size: 10em">CART</h1>
    @php
        $count=0;
    @endphp
    @foreach ($orders as $order)
    <div class="container-fluid text-center">
        <div class="row m-3">
          <div class="col-3">
            <img class="rounded-circle mb-2" style="height: 20em;width: 20em" src={{ $order->items->image }}>
          </div>
          <div class="col-3">
            <h1 class="m-5" style="">{{ $order->items->item_name}}</h1>
          </div>
          <div class="col-3">
              <h1 class="m-5" style="">Rp{{ $order->items->price }}</h1>
              @php
                $count+=$order->items->price
              @endphp
          </div>
          <div class="col-3">
              <a class="m-5 fs-5" href="cart/delete/{{ $order->id }}"><h1>Delete</h1></a>
          </div>
      </div>
    @endforeach
      <div class="row m-5">
        <div class="col-4">
            <h1>{{_('app.Total Harga')}}</h1>
        </div>
        <div class="col-8">
            <h1>Rp.{{ $count }},00</h1>
        </div>
      </div>
      <div class="d-flex justify-content-center">
            <a href="/checkout" class="btn btn-warning px-5 rounded-pill" style="font-size: 5em"> Checkout</a>
      </div>
      @endif
@endsection