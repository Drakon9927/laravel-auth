@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="width: 100%; max-width: 540px;">
        @if ($project->cover_image)
            <img src="{{ asset('storage/' . $project->cover_image) }}" class="card-img-top" alt="Cover Image">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->description }}</p>
            <p class="card-text"><strong>Start Date:</strong> {{ $project->start_date->format('Y-m-d') }}</p>
            <p class="card-text"><strong>End Date:</strong> {{ $project->end_date->format('Y-m-d') }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $project->status }}</p>
            
            <a href="{{ route('projects.index') }}" class="btn btn-primary">Back to List</a>
            
            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-secondary">Edit</a>
           
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>

<style scoped>
    body {
        background-color: #222;
    }
    .card {
        margin: 1.5rem; 
        background-color: white; 
    }
    .card-img-top {
        width: 100%; 
        height: auto; /
        object-fit: cover; 
    }
</style>

@endsection