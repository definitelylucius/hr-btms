<?php

namespace App\Http\Controllers;
use App\Models\Application;

use Illuminate\Http\Request;

class ApplicationPipelineController extends Controller
{
    public function index()
    {
        $newApplicationsCount = Application::where('status', 'new')->count();
        $screeningCount = Application::where('status', 'screening')->count();
        $interviewCount = Application::where('status', 'interview')->count();
        $offerCount = Application::where('status', 'offer')->count();
        $hiredCount = Application::where('status', 'hired')->count();

        return view('application_pipeline', compact(
            'newApplicationsCount',
            'screeningCount',
            'interviewCount',
            'offerCount',
            'hiredCount'
        ));
    }
}
