<?php

namespace App\Http\Controllers;

use App\Models\JobRequisition;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         // Get the count of open job requisitions
         $openJobsCount = JobRequisition::where('status', 'open')->count(); // Adjust the status based on your model's logic
        

         // Pass the variable to the view
         return view('manager.dashboard', compact('openJobsCount'));
    }
}