@extends('allpagelayout')
@section('title', 'Clutterclean')
@section('customcss')
<style>
  body {
    background-color: #0d1117;
  }
  .text-neon {
    color: #00ffae;
    text-shadow: 0 0 10px #00ffae, 0 0 20px #00ffae;
  }
  .neon-card {
    transition: 0.3s;
    border-radius: 15px;
  }
  .neon-card:hover {
    box-shadow: 0 0 15px #00ffae, 0 0 25px #00ffae;
    transform: translateY(-5px);
  }
</style>

@endsection
@section('main-content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/clutterclean.png') }}" alt="logo" width="90" height="50" class="d-inline-block align-text-center">
      <span class="fw-bold text-success">Clutterclean</span>
    </a>
    <div class="ms-auto">
      <a href="{{ url('/login') }}" class="btn btn-outline-light me-2">Login</a>
      <a href="{{ url('/register') }}" class="btn btn-success">Register</a>
    </div>
  </div>
</nav>

<!-- Hero Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/crousal1.png') }}" class="d-block w-100" alt="Clean Productivity" style="opacity: 0.7;">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-neon">Welcome to ClutterClean</h5>
        <p class="text-light">Clear the mess, one task at a time.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/crousal2.png') }}" class="d-block w-100" alt="Organized Workspace" style="opacity: 0.7;">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-neon">Declutter Your Digital Life</h5>
        <p class="text-light">Simple steps to improve focus and productivity.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Features Section -->
<div class="container py-5">
  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <div class="card bg-dark text-light shadow neon-card border border-success">
        <div class="card-body">
          <i class="bi bi-check2-circle display-4 text-success"></i>
          <h5 class="card-title mt-3">Daily Cleanup Tasks</h5>
          <p class="card-text">Get small, impactful tasks every day to declutter your digital space.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card bg-dark text-light shadow neon-card border border-primary">
        <div class="card-body">
          <i class="bi bi-bar-chart-line display-4 text-primary"></i>
          <h5 class="card-title mt-3">Track Progress</h5>
          <p class="card-text">Visual progress bar and streaks to keep you motivated.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card bg-dark text-light shadow neon-card border border-warning">
        <div class="card-body">
          <i class="bi bi-emoji-smile display-4 text-warning"></i>
          <h5 class="card-title mt-3">Feel Accomplished</h5>
          <p class="card-text">Mark tasks done and celebrate small wins every day!</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
