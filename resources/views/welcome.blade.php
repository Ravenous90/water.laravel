@extends('layouts.app')

@section('content')
    <div class="home-content">
        <div class="one-block">
            <a href="{{ url('/buildings') }}">Buildings</a>
        </div>
        <div class="one-block">
            <a href="{{ url('/floors') }}">Floors</a>
        </div>
        <div class="one-block">
            <a href="{{ url('/sensors') }}">Sensors</a>
        </div>
        <div class="one-block">
            <a href="{{ url('/boss') }}">Boss</a>
        </div>
    </div>
@endsection