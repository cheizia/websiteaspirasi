@extends('layouts.main')

@section('container')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="mt-8 text-white fs-5 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6" style="background-color: rgb(209, 158, 238)">
      <h1 class="text-light" style="text-align: center; ">Login Admin</h1>
      <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" required placeholder="Username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
        </div>
        <button type="submit" class="btn btn-light">Login</button>
      </form>
    </div>
  </div>
</div>
@endsection