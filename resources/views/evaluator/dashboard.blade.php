@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Evaluator Dashboard</div>

                    <div class="card-body">
                        <h5>Welcome, {{ auth()->user()->name }}!</h5>

                        <p>Your Evaluator Information:</p>
                        <ul>
                            <li>Email: {{ auth()->user()->email }}</li>
                            <li>Role: {{ auth()->user()->role }}</li>
                        </ul>

                        <!-- {{-- Display Evaluator Preferences --}} -->
                        <h5>Your Evaluator Preferences:</h5>
                        @if ($preferences)
                            <ul>
                                <li>Category: {{ $preferences->category ?? 'Not set' }}</li>
                                <li>Specialty Area: {{ $preferences->specialty_area ?? 'Not set' }}</li>
                            </ul>
                            <p><a href="{{ route('evaluator.preferences') }}">Update Preferences</a></p>
                        @else
                            <p>No preferences set. <a href="{{ route('evaluator.preferences') }}">Set Preferences</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
