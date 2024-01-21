@extends('layouts.auth')

@section('content')
    @auth
        <form method="POST" action="{{ route('logOut') }}">
            @csrf
            @method('DELETE')

            <button type="submit">Exit</button>
        </form>
    @endauth
@endsection
