<!-- evaluator/assigned_projects.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Assigned Projects</h2>

        <ul>
            @foreach($assignedProjects as $project)
                <li>
                    {{ $project->title }} - Location: {{ $project->location }}
                    <form method="post" action="{{ route('evaluator.score_project', ['projectId' => $project->id]) }}">
                        @csrf
                        <label for="score">Score (1-10): </label>
                        <input type="number" name="score" min="1" max="10" required>
                        <button type="submit">Submit Score</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
