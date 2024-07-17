@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica un Project</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" required value="{{ old('title', $project->title) }}">
                        @error('title')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" required>{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="start_date" required value="{{ old('start_date', $project->start_date) }}">
                        @error('start_date')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">End Date</label>
                        <input type="date" class="form-control" name="end_date" required value="{{ old('end_date', $project->end_date) }}">
                        @error('end_date')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <textarea class="form-control" name="status" required>{{ old('status', $project->status) }}</textarea>
                        @error('status')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cover Image</label>
                        <input type="file" class="form-control" name="cover_image">
                        @if ($project->cover_image)
                            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="Current Cover Image" class="img-fluid mt-2">
                        @endif
                        @error('cover_image')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection