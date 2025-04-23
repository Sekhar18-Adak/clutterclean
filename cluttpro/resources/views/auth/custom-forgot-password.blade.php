@extends('allpagelayout')
@section('title','Reset Password')
@section('customcss')
<style>
  body {
    background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  .reset-card {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 1rem;
    padding: 2rem;
    max-width: 500px;
    width: 100%;
    color: #fff;
    backdrop-filter: blur(8px);
    box-shadow: 0 8px 24px rgba(0, 255, 255, 0.2);
  }
  .form-label { color: #0ff; }
  .form-control {
    background-color: rgba(255, 255, 255, 0.1);
    border: none;
    color: #fff;
  }
  .btn-primary {
    background-color: #0ff;
    color: #000;
    font-weight: bold;
  }
  .card-title { color: #0ff; text-align: center; font-weight: 600; }
</style>
@endsection

@section('main-content')
<div class="reset-card">
  <h3 class="card-title">Reset Your Password</h3>

  @if (session('status'))
    <div class="alert alert-success mt-3">{{ session('status') }}</div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger mt-3">
      @foreach ($errors->all() as $error)
        <p class="mb-0">{{ $error }}</p>
      @endforeach
    </div>
  @endif

  <form method="POST" action="{{ route('custom.password.reset') }}">
    @csrf
    <div class="mb-3 mt-4">
      <label for="email" class="form-label">Registered Email</label>
      <input type="email" class="form-control" name="email" required placeholder="example@example.com">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">New Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
  </form>
</div>
@endsection
