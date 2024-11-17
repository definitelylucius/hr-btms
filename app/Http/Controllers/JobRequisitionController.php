<?php

namespace App\Http\Controllers;

use App\Models\JobRequisition; // Ensure this line is present
use Illuminate\Http\Request;

class JobRequisitionController extends Controller
{
    public function index()
    {
        $jobRequisitions = JobRequisition::all();
        return view('manager.jobreq', compact('jobRequisitions'));
    }

    public function create()
    {
        // Return a view to create a new job requisition
        return view('manager.create_jobreq'); // Adjust the view name as necessary
    }

    public function store(Request $request)
    {
        \Log::info('Incoming Request Data:', $request->all());

        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'vacancies' => 'required|integer|min:1',
                'salary_min' => 'required|numeric',
                'salary_max' => 'required|numeric',
                'description' => 'required|string',
                'postings.*.title' => 'required|string|max:255', // Validate postings if any
                'postings.*.description' => 'required|string',
            ]);

            // Create a new job requisition
            $jobRequisition = JobRequisition::create($validatedData);

            

            return redirect()->back()->with('success', 'Job requisition created successfully.');
        } catch (\Exception $e) {
            \Log::error('Error occurred: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while saving the data.']);
        }
    }
}