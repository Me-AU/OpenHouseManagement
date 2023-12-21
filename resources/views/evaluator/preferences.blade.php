<!-- evaluator/preferences.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Evaluator Preferences</h2>

        <form method="post" action="{{ route('evaluator.preferences.update') }}">
            @csrf

            <!-- Category -->
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category', optional($preferences)->category) }}">
            </div>

            <!-- Specialty Area -->
            <div class="form-group">
                <label for="specialty_area">Specialty Area:</label>
                <input type="text" class="form-control" id="specialty_area" name="specialty_area" value="{{ old('specialty_area', optional($preferences)->specialty_area) }}">
            </div>

            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Update Preferences</button>

            <a href="{{ route($route_name) }}">Go to Dashboard</a>
        </form>
    </div>
@endsection
