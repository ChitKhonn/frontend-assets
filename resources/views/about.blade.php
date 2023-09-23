@extends('master')
@section('content')
    <div class="m-3">
        <h1 class="text-primary" id="aboutHeading">
            I'm about page.
        </h1>
        <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quod? Quaerat ad pariatur maxime exercitationem
            enim aperiam ullam dolorum! Dignissimos.
        </p>
        <button class="btn btn-primary" id="showName">Show My Name</button>
        <a href="{{route('index')}}">Index Page</a>
    </div>
@endsection
@push('script')
    @vite("resources/js/aboutPage.js")
@endpush
