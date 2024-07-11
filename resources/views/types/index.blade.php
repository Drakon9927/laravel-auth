@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Types</h1>
    <a href="{{ route('types.create') }}" class="btn btn-primary">Add New Type</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{ $type->name }}</td>
                <td>{{ $type->description }}</td>
                <td>{{ $type->icon }}</td>
                <td>
                    <a href="{{ route('types.edit', $type->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('types.destroy', $type->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection