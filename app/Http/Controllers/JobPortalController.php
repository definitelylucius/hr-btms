<?php

namespace App\Http\Controllers;

use App\Models\JobPortal;
use App\Models\JobRequisition;// Ensure this line is present
use Illuminate\Http\Request;


class JobPortalController extends Controller{

    public function index()
    {
        // Fetch data from the job requisition database
        $jobRequisitions = JobRequisition::all(); // You can also use other Eloquent methods as needed

        // Pass the data to your view
        return view('welcome', compact('jobRequisitions'));
    }

    public function store(Request $request)
{
    \Log::info('Incoming Request Data:', $request->all());

    try {
        $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'salary' => 'required|numeric', // Ensure salary is validated
            'description' => 'required|string',
            'vacancies' => 'required|integer|min:1',
        ]);

        JobPortal::create($request->all());

        return redirect()->back()->with('success', 'Job requisition created successfully.');
    } catch (\Exception $e) {
        \Log::error('Error occurred: ' . $e->getMessage());
        return redirect()->back()->withErrors(['error' => 'An error occurred while saving the data.']);
    }
}
}

