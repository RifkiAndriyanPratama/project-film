@extends('layout.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    @if(session()->has('succeess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('Error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('Error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form action="{{ route('login.proseslogin') }}" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text"  name="username" class="form-control @error('username') is-invalid" @enderror id="username" placeholder="name@example.com" required autofocus>
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password"  class="form-control"  id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
    
        <button class="btn btn-success w-100 py-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not register? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>
@endsection