@extends('main.main')

@section('content')
    @include('partials.header')
@if (Session::has('message'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
    <h3>
        Welcome {{$user->name}}
    </h3>

@endsection
