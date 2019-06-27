@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="back-btn" href="{{ url('/') }}">
            @include('boxes/back-button')
        </a>
        <table class="table table-bordered custom-table">
            <caption></caption>
            <thead>
            <tr>
                <th scope="col">Sensor</th>
                <th scope="col">Floor</th>
                <th scope="col">Building</th>
                <th scope="col">User</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td><a href="{{ url('/sensors/' . $item->sensor_id) }}">{{ $item->sensor }}</a></td>
                    <td><a href="{{ url('/floors/' . $item->floor_id) }}">{{ $item->floor }}</a></td>
                    <td><a href="{{ url('/buildings/' . $item->building_id) }}">{{ $item->building }}</a></td>
                    <td><a href="{{ url('/users/' . $item->user_id) }}">{{ $item->user }}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection