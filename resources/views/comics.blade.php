@extends('layout.layout')

@section('content')
<div class="container">
    <h1 class="text-center">COMICS</h1>
    <div class="d-flex flex-wrap mt-5">
        @foreach ($data as $comic)
            <div class="col-4 py-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="img-comic" src="{{ $comic["thumb"] }}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic["title"]}}</h5>
                        <span>{{$comic["price"]}}</span>
                        <span>{{$comic["series"]}}</span>
                    </div>
                </div>
            </div>
        @endforeach



    </div>
    <a class="mt-5 d-block text-center" href="{{route('mainPage')}}">Main Page</a>
</div>

@endsection