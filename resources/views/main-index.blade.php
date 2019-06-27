@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="back-btn" href="{{ url('/') }}">
            @include('boxes/back-button')
        </a>
        <table class="table table-bordered custom-table">
            <caption>{{ ucfirst($title) }}</caption>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('/' . $title . '/' . $item->id) }}">{{ $item->name }}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection