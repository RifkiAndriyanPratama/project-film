@extends('layout.main')
@section('container')

<h1 class="text-center mt-4">{{ $title }}</h1>

  <div class="containner">
    <div class="row">
      @foreach ($film as $f)
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.6)">
            <a href="/genre/{{ $f['genre'] }}" class="text-white text-decoration-none"></a>
          </div>
          <img src="https://source.unsplash.com/500x400?" class="card-img-top" alt="">
          <div class="card-body">
            <h3 class="card-title"><a href="/film/{{ $f['id'] }}" class="text-decoration-none text-dark">{{ $f['judul'] }}</a></h3>
            <h5>{{ $f['actor'] }}</h5>
            <p class="card-text">{{ $f['sipnosis']}}</p>
            <a href="/film/{{ $f['id'] }}" class="btn btn-success">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>   
@endsection