@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-8">
        <div class="col-md-8">
            <h1>{{ $film->title }}</h1>

            <p>By. {{ $film->author->name}}</p>
            <img src="https://source.unsplash.com/1200x400?{{ $film->genre->name }}" alt="" class="img-fluid">
            <article>
                {!! $film->sipnosis !!}
            </article>

            <div>
                <a href="/films" class="text-decoration-none">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection