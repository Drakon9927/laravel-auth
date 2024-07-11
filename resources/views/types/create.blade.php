@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Type</h1>
    <form action="{{ route('types.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="icon">Icon (optional):</label>
            <input type="text" class="form-control" id="icon" name="icon">
        </div>
        <button type="submit" class="btn btn-primary">Create Type</button>
    </form>
</div>
@endsection