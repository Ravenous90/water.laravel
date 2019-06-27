@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="back-btn" href="{{ url()->previous() }}">
            @include('boxes/back-button')
        </a>
        <div class="custom-title">
            <div class="button-container-1">
                <span class="mas">{{ $item->name }}</span>
                <button type="button" name="Hover">{{ $item->name }}</button>
            </div>
        </div>
        @if(!is_null($user))
            <div class="username-container">
                <span>User: </span>
                <span><a href="{{ url('/' . $childTitle . '/' . $user->id) }}">{{ $user->name }}</a></span>
            </div>
        @endif
        @if(!is_null($children) && $childTitle !== 'users')
            <table class="table table-bordered custom-table">
                <caption>{{ ucfirst($childTitle) }}:</caption>
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($children as $child)
                        <tr>
                            <td>{{ $child->id }}</td>
                            <td><a href="{{ url('/' . $childTitle . '/' . $child->id) }}">{{ $child->name }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection