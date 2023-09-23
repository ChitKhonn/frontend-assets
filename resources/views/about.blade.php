@extends('master')
@section('content')
    <div class="m-3">
        <h1 class="text-primary">
            I'm index page.
        </h1>
        <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quod? Quaerat ad pariatur maxime exercitationem
            enim aperiam ullam dolorum! Dignissimos.
        </p>
        <button class="btn btn-primary" id="showName">Show My Name</button>
        <a href="{{route('index')}}">Index Page</a>
    </div>
@endsection
