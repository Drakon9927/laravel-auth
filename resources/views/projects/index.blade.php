@extends('layouts.app')

@section('content')
@foreach ($projects as $project)  
<div class="card" style="width: 18rem;">
   
    <div class="card-body">
        <h5 class="card-title">{{ $project->title }}</h5>
        <p class="card-text">{{ $project->description }}</p>
        <p class="card-text">{{ $project->start_date->format('Y-m-d') }}</p>
        <p class="card-text">{{ $project->end_date->format('Y-m-d') }}</p>
        <p class="card-text">{{ $project->status }}</p>
        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View Details</a>
        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-secondary">Edit</a>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro?')">Cancella</button>
        </form>
    </div>
</div>
@endforeach

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