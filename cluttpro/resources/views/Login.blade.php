@extends('allpagelayout')
@section('title','Login Page')

@section('customcss')
<style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 1rem;
      padding: 2rem;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 8px 24px rgba(0, 255, 255, 0.2);
      color: #fff;
      backdrop-filter: blur(8px);
      border: 1px solid rgba(0, 255, 255, 0.1);
    }

    .form-label {
      color: #0ff;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      color: #fff;
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.15);
      color: #fff;
      box-shadow: none;
    }

    .btn-primary {
      background-color: #0ff;
      color: #000;
      border: none;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #00cccc;
    }

    .card-title {
      font-weight: 600;
      color: #0ff;
      text-align: center;
    }

    a {
      color: #0ff;
      text-decoration: underline;
    }

    a:hover {
      color: #00cccc;
    }
</style>
@endsection

@section('main-content')
<div class="login-card">
  <h3 class="card-title text-center mb-4">Welcome Back</h3>

  {{-- Display session error --}}
  @if(session('error'))
    <div class="alert alert-danger text-center">
      {{ session('error') }}
    </div>
  @endif

  {{-- Display validation errors --}}
  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <p class="mb-0">{{ $error }}</p>
      @endforeach
    </div>
  @endif

  <form action="{{ route('login.post') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="remember" />
      <label class="form-check-label" for="remember">Remember me</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>

    <p class="mt-3 text-center">
      <a href="{{ route('custom.password.form') }}">Forgot password?</a>
    </p>
    <p class="text-center">
      Don't have an account? <a href="{{ url('/register') }}">Register</a>
    </p>
  </form>
</div>
@endsection
