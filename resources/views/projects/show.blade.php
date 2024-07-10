@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->description }}</p>
            <p class="card-text">{{ $project->start_date }}</p>
            <p class="card-text">{{ $project->end_date }}</p>
            <p class="card-text">{{ $project->status }}</p>
            
            <a href="{{ route('projects.index') }}" class="btn btn-primary">Back to List</a>
            
            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-secondary">Edit</a>
           
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
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
        background-color: red; 
    }
</style>

@endsection