<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\userdata; // Ensure the User model is imported

class DashboardController extends Controller
{
   public function showNextTasks()
   {
       return view('newtask');
   }

   public function markTasksComplete()
   {
       return view('taskcomplete');
   }

//     public function DASHBOARD()
//     {
//         $user = Auth::user();

//         // Check if the user has completed the registration tasks
//         if (!$user->register_tasks_completed) {
//             return view('defaultdashboard'); // Blade file for default tasks (register tasks)
//         } else {
//             return view('newtask'); // Blade file for new tasks
//         }    
//     }

}
