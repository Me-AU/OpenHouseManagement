<!-- fypgroup/edit_project.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Project</h2>

        <form method="post" action="{{ route('fypgroup.project.update', ['id' => $project->id]) }}">
            @csrf
            @method('PATCH') {{-- Use PATCH method for updates --}}

            <!-- Title -->
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}" required>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $project->description) }}</textarea>
            </div>

            <!-- Location -->
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $project->location) }}">
            </div>

            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection
