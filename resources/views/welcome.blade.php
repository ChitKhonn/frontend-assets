@extends('master')
@section('content')
    <div class="m-3">
        <h1 class="text-primary animate__animated animate__bounce">
            I'm index page.
            <i class="bi bi-house"></i>
        </h1>
        <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quod? Quaerat ad pariatur maxime exercitationem
            enim aperiam ullam dolorum! Dignissimos.
        </p>
        <button class="btn btn-primary" id="greeting">Say Hello</button>
        <a href="{{route('about')}}">About Page</a>
    </div>
@endsection
