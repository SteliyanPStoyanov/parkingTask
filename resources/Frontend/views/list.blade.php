@extends('Frontend.views.layout')

@section('content')
    <div class="btn btn-primary ">
        Free Slots <span class="badge badge-light">
            {{ $parking->slots - $cars->sum('carType') }}
        </span>
    </div>

    <list-car :cars='{{json_encode($cars)}}'></list-car>

@endsection

