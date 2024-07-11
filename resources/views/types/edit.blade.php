@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Type</h1>
    <form action="{{ route('types.update', $type->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required>{{ $type->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="icon">Icon (optional):</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ $type->icon }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Type</button>
    </form>
</div>
@endsection