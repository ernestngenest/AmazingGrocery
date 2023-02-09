@extends('layout')

@section('content')
    <div class="container-fluid text-center">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-3">
                    <div class="m-3">
                        <x-card-item :item="$item"/>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mb-5 p-4">
        {{ $items->links() }}
    </div>
@endsection