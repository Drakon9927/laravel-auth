@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add New Project</a>
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-4">
            <div class="card mb-4" style="width: 18rem;">
                @if ($project->cover_image)
                <img src="{{ asset('storage/' . $project->cover_image) }}" class="card-img-top" alt="Cover Image" style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p class="card-text">{{ $project->start_date->format('Y-m-d') }}</p>
                    <p class="card-text">{{ $project->end_date->format('Y-m-d') }}</p>
                    <p class="card-text">{{ $project->status }}</p>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">View Details</a>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro?')">Cancella</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style scoped>
    body {
        background-color: #222;
    }
    .card {
        margin: 1.5rem;
    }
    .card-img-top {
        width: 100%; 
        height: auto; 
        object-fit: cover; 
    }
</style>
@endsection