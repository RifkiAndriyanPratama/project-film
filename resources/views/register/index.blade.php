@extends('layout.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
      <form action="/register" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" required value="{{ old('name') }}">
        <label for="floatingInput">Name</label>
          @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Name" required value="{{ old('username') }}">
        <label for="floatingInput">Username</label>
          @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
          @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
    
        <button class="btn btn-success w-100 py-2" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already registered? <a href="/login">Login Now!</a></small>
    </main>
  </div>
</div>
@endsection