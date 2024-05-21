@extends('layout.layout')

@yield('title.home')

@section('content')
<div class="container">
    <div class="d-flex flex-column">
        <h1>HOME</h1>

        <a class="mt-5" href="{{route('mainPage')}}">Main Page</a>
    </div>
</div>
@endsection