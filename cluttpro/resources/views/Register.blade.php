@extends('allpagelayout')
@section('title','Register Page')
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

    .register-card {
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
<div class="register-card">
  <h3 class="card-title mb-4">Create Account</h3>
  <form action="{{ route('register.post') }}" method="post">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name" required>
      @error('name')
        <div class="text-danger mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      @error('email')
        <div class="text-danger mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
      @error('phone')
        <div class="text-danger mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Create Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      @error('password')
        <div class="text-danger mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="confirm-password" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password" name="confirmpassword" required>
      @error('confirmpassword')
        <div class="text-danger mt-1">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary w-100">Register</button>

    <p class="mt-3 text-center">
      Already have an account? <a href="{{ url('/login') }}">Login here</a>
    </p>
  </form>
</div>

@endsection