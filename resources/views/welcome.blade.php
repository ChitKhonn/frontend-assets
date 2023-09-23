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
        <button class="btn btn-primary" id="greeting">Say Hello</button>
        <a href="{{route('about')}}">About Page</a>
    </div>
@endsection
