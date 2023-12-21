<!-- admin/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Dashboard</h2>

        <!-- Display a form to set the physical location of each FYP project -->
        <form action="{{ route('admin.set_location') }}" method="post">
            @csrf

            <h3>Set Physical Location for FYP Projects</h3>

            @foreach($projects as $project)
                <div class="mb-3">
                    <label for="location_{{ $project->id }}" class="form-label">{{ $project->title }}:</label>
                    <input type="text" id="location_{{ $project->id }}" name="locations[{{ $project->id }}]" class="form-control" value="{{ $project->location }}">
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary">Save Locations</button>
        </form>
    </div>
@endsection
