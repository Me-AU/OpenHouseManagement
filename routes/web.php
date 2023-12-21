<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EvaluatorPreferencesController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\FYPGroupController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'evaluator'])->group(function () {
    // Evaluator Preferences Routes
    Route::get('evaluator/preferences', [EvaluatorPreferencesController::class, 'showForm'])->name('evaluator.preferences');
    Route::post('evaluator/preferences/update', [EvaluatorPreferencesController::class, 'updatePreferences'])->name('evaluator.preferences.update');

    // Evaluator Dashboard
    Route::get('evaluator/dashboard', [EvaluatorController::class, 'showDashboard'])->name('evaluator.dashboard');
    Route::get('evaluator/assigned-projects', [EvaluatorController::class, 'showAssignedProjects'])->name('evaluator.assigned_projects');
    Route::post('evaluator/score/{projectId}', [EvaluatorController::class, 'scoreProject'])->name('evaluator.score_project');
});

Route::middleware(['auth', 'fypgroup'])->group(function () {
    // FYP Group Dashboard
    Route::get('fypgroup/dashboard', [FYPGroupController::class, 'showDashboard'])->name('fypgroup.dashboard');

    // Edit Project Routes (Assuming these routes already exist)
    Route::get('fypgroup/project/edit/{id}', [FYPGroupController::class, 'editProject'])->name('fypgroup.project.edit');
    Route::patch('fypgroup/project/update/{id}', [FYPGroupController::class, 'updateProject'])->name('fypgroup.project.update');
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Dashboard
    Route::get('admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    
    // Route to handle setting project locations
    Route::post('admin/set_location', [AdminController::class, 'setProjectLocations'])->name('admin.set_location');
});

require __DIR__.'/auth.php';
