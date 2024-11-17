<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\JobRequisitionController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\JobPortalController;
use App\Http\Controllers\ApplicationPipelineController;
use App\Http\Controllers\AdminController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Group for admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/users/dashboard', [UserController::class, 'index'])->name('admin.user.dashboard');
});

// Group for manager routes
Route::middleware(['auth', 'manager'])->group(function () {
    Route::get('roles/manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
});

// Group for recruiter routes
Route::middleware(['auth', 'recruiter'])->group(function () {
    Route::get('roles/recruiter/dashboard', [RecruiterController::class, 'index'])->name('recruiter.dashboard');
});






Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/onboarding', function () {
    return view('onboarding');
});




/// for Onboarding
Route::get('/onboardingt/uploadd', function () {
    return view('/onboardingt/uploadd');
});
Route::get('/onboardingt/complete', function () {
    return view('/onboardingt/complete');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
    Route::post('/documents/store', [DocumentController::class, 'store'])->name('documents.store');
});

Route::get('/assignments/1', function () {
    return view('modals.assignment1'); // Make sure to create a Blade view for assignment1
});

Route::get('/assignments/2', function () {
    return view('modals.assignment2'); // Make sure to create a Blade view for assignment2
});

Route::get('/assignments/3', function () {
    return view('modals.assignment3'); // Make sure to create a Blade view for assignment2
});

Route::get('/assignments/4', function () {
    return view('modals.assignment4'); // Make sure to create a Blade view for assignment2
});

Route::post('/upload', [DocumentController::class, 'upload'])->name('upload');


//manager






Route::get('/managerp/jobreqp', function () {
    return view('managerp/jobreqp');
});


Route::get('/manager/jobreq', function () {
    return view('manager/jobreq');
});

Route::get('/manager/dashboard', function () {
    return view('manager/dashboard');
});


Route::get('/manager/onboardingm', function () {
    return view('manager/onboardingm');
});

Route::get('/manager/applicantm', function () {
    return view('manager/applicantm');
});

Route::get('/manager/recruitm', function () {
    return view('manager/recruitm');
});



//recruiter







Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


//auth

Route::post('/manager/logout', function () {
    Auth::guard('manager')->logout();
    return redirect('/'); // Redirect after logout
})->name('manager.logout');

Route::post('/recruiter/logout', function () {
    Auth::guard('recruiter')->logout();
    return redirect('/'); // Redirect after logout
})->name('recruiter.logout');

Route::post('/employee/logout', function () {
    Auth::guard('employee')->logout();
    return redirect('/'); // Redirect after logout
})->name('employee.logout');

Route::post('/user/logout', function () {
    Auth::guard('user')->logout();
    return redirect('/'); // Redirect after logout
})->name('user.logout');



Route::get('/manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
Route::get('/recruiter/dashboard', [RecruiterController::class, 'index'])->name('recruiter.dashboard');
Route::get('/users/dashboard', [AdminController::class, 'index'])->name('users.dashboard');

;



Route::get('/manager/jobreq', [JobRequisitionController::class, 'index'])->name('job-requisitions.index');
Route::post('/manager/jobreq', [JobRequisitionController::class, 'store'])->name('job-requisitions.store');
// Route for the welcome page


Route::get('/welcome', [JobPortalController::class, 'index'])->name('jobPortals.index');
Route::post('/welcome', [JobPortalController::class, 'store'])->name('jobPortals.store');
Route::get('/', [JobPortalController::class, 'index']);

Route::post('/manager/jobreq', [JobRequisitionController::class, 'create']);

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::resource('job-requisitions', JobRequisitionController::class);

Route::get('/manager/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('manager.dashboard');


//application pipeline
Route::get('/manager/applicationm', [ApplicationPipelineController::class, 'index']);


//admin
Route::get('/users/dashboard', [AdminController::class, 'index']);
Route::middleware(['web', 'auth', 'admin'])->group(function () {
    Route::get('/users/dashboard', [AdminController::class, 'dashboard'])->name('admin.user.dashboard');
});


