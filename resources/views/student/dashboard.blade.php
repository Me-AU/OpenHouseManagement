<!-- resources/views/student/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Student Dashboard</h2>

        <div class="card">
            <div class="card-body">
                <h3>Your Project Information</h3>
                <p>Project Title: {{ $project->title }}</p>
                <p>Project Description: {{ $project->description }}</p>
                <p>Assigned Evaluators: {{ $evaluatorsCount }}</p>
            </div>
        </div>
    </div>
@endsection
