@extends('allpagelayout')
@section('title', 'Task Completed')
@section('customcss')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> -->
<style>
    body {
        background-color: #0f172a;
        color: #fff;
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }
    .completion-box {
        background: #1e293b;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 0 20px rgba(0,255,174,0.2);
        text-align: center;
        max-width: 500px;
    }
    .completion-box .icon {
        font-size: 60px;
        color: #00ffae;
        margin-bottom: 20px;
    }
    .completion-box h2 {
        font-weight: bold;
        margin-bottom: 10px;
    }
    .completion-box p {
        font-size: 16px;
        color: #cbd5e1;
    }
    .completion-box .btn {
        margin-top: 25px;
        background-color: #00ffae;
        color: #000;
        border-radius: 10px;
    }
    .completion-box .btn:hover {
        background-color: #00e6a3;
    }
</style>
@endsection

@section('main-content')
<div class="completion-box">
    <div class="icon">
        <i class="bi bi-check-circle-fill"></i>
    </div>
    <h2>Tasks Completed!</h2>
    <p>Congratulations! You've successfully completed your new tasks for today. Keep up the momentum and stay productive!</p>
    <a href="{{ url('/dashboard') }}" class="btn btn-lg px-4">Go to Dashboard</a>
    
</div>
@endsection
