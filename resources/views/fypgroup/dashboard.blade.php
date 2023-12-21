<!-- fypgroup/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>FYP Groups Dashboard</h2>

        <!-- Display List of Projects -->
        <ul>
            @foreach($projects as $project)
                <li>
                    <a href="{{ route('fypgroup.project.edit', ['id' => $project->id]) }}">{{ $project->title }}</a>
                </li>
            @endforeach
        </ul>
        <!-- Display evaluator preferences -->
        @foreach($evaluatorPreferences as $preferences)
            <p>Evaluator: {{ $preferences->evaluator->name }}</p>
            <p>Category: {{ $preferences->category }}</p>
            <p>Specialty Area: {{ $preferences->specialty_area }}</p>
        @endforeach

    </div>
@endsection 
