@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="back-btn" href="{{ url()->previous() }}">
            @include('boxes/back-button')
        </a>
        @if(!is_null($username))
        <div class="custom-title">
            <div class="button-container-1">
                <span class="mas">User: {{ $username }}</span>
                <button type="button" name="Hover">User: {{ $username }}</button>
            </div>
        </div>
        @endif
        @if(!is_null($usersSensors))
            <table class="table table-bordered custom-table">
                <caption>User: {{ $username }}:</caption>
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usersSensors as $sensor)
                    <tr>
                        <td>{{ $sensor->id }}</td>
                        <td><a href="{{ url('/' . $sensorTitle . '/' . $sensor->id) }}">{{ $sensor->name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection