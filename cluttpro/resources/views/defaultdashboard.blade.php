@extends('allpagelayout')
@section('title','Dashboard Page')
@section('customcss')
<style>
  body {
    background-color: #0d1117;
    color: #fff;
  }
  .sidebar {
    background-color: #161b22;
    min-height: 100vh;
    padding: 20px;
  }
  .task-card {
    background-color: #1f2937;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 15px;
    transition: background 0.3s;
  }
  .task-card.done {
    background-color: #143d2b !important;
  }
  .progress-bar {
    background-color: #00ffae;
  }
  .btn-done {
    background-color: #2d3748;
    color: white;
    border: none;
  }
  .btn-done:hover {
    background-color: #00ffae;
    color: black;
  }
</style>
@endsection

@section('main-content')
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark px-4">
  <span class="navbar-brand"><i class="bi bi-broom-fill"></i> ClutterClean Dashboard</span>
  <a href="{{ url('/logout') }}" class="btn btn-outline-light btn-sm"><i class="bi bi-box-arrow-right"></i> Logout</a>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-md-3 sidebar">
      <h5><i class="bi bi-graph-up-arrow"></i> Progress</h5>
      <div class="progress mb-3" style="height: 10px;">
        <div id="progressBar" class="progress-bar" style="width: 0%;"></div>
      </div>

      <h6><i class="bi bi-fire"></i> Streak: <span id="streakCount">3 Days</span></h6>
      <h6 class="mt-3"><i class="bi bi-clipboard-data"></i> Summary</h6>
      <ul class="small">
        <li><span id="tasksDone">0</span> / 5 tasks done</li>
        <li>Estimated time saved: <span id="timeSaved">0</span> mins</li>
      </ul>
    </div>

    <!-- Tasks Section -->
    <div class="col-md-9 p-4">

      <h4 class="mb-4">Today's Cleanup Tasks</h4>

      <div class="task-card" data-time="5">
        <div class="d-flex justify-content-between align-items-center">
          <span><i class="bi bi-envelope-exclamation"></i> Delete 5 Unread Emails (Inbox Detox)</span>
          <button class="btn btn-done btn-sm">Mark as Done</button>
        </div>
      </div>

      <div class="task-card" data-time="3">
        <div class="d-flex justify-content-between align-items-center">
          <span><i class="bi bi-folder2-open"></i> Sort 3 Files in Downloads</span>
          <button class="btn btn-done btn-sm">Mark as Done</button>
        </div>
      </div>

      <div class="task-card" data-time="4">
        <div class="d-flex justify-content-between align-items-center">
          <span><i class="bi bi-app-indicator"></i> Identify 1 Unused App</span>
          <button class="btn btn-done btn-sm">Mark as Done</button>
        </div>
      </div>

      <div class="task-card" data-time="2">
        <div class="d-flex justify-content-between align-items-center">
          <span><i class="bi bi-window-desktop"></i> Close 5 Browser Tabs</span>
          <button class="btn btn-done btn-sm">Mark as Done</button>
        </div>
      </div>

      <div class="task-card" data-time="6">
        <div class="d-flex justify-content-between align-items-center">
          <span><i class="bi bi-cloud-arrow-down-fill"></i> Delete 5 GB from Cloud (Drive, Dropbox)</span>
          <button class="btn btn-done btn-sm">Mark as Done</button>
        </div>
      </div>

      <!-- Final Button and New Task Link -->
       <a href="{{ url('/tasks/complete') }}" id="finalDoneBtn" class="btn btn-success mt-4 d-none">All Tasks Completed!</a>
        <!-- <a href="{{ url('/dashboard') }}" id="goToNextTasksBtn" class="btn btn-primary mt-2 d-none">Go to New Tasks</a> -->

    </div>
  </div>
</div>
@endsection

@section('customjs')
<script>
  const buttons = document.querySelectorAll(".btn-done");
  let doneCount = 0;
  let totalTasks = buttons.length;
  let timeSaved = 0;

  const finalBtn = document.getElementById("finalDoneBtn");
  const nextTaskBtn = document.getElementById("goToNextTasksBtn");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const card = btn.closest(".task-card");
      if (!card.classList.contains("done")) {
        card.classList.add("done");
        btn.innerText = "Completed";
        btn.disabled = true;
        doneCount++;
        timeSaved += parseInt(card.dataset.time);
        updateProgress();
      }
    });
  });

  function updateProgress() {
    const percent = (doneCount / totalTasks) * 100;
    document.getElementById("progressBar").style.width = percent + "%";
    document.getElementById("tasksDone").innerText = doneCount;
    document.getElementById("timeSaved").innerText = timeSaved;

    if (doneCount === totalTasks) {
      finalBtn.classList.remove("d-none");
    }
  }
</script>
@endsection
