@extends('layouts.app')

@section('content')
    <div class="p-5">
        <h3>{{ $project->name }}</h3>
        <p>{{ $project->description }}</p>
        <a href="{{ route('admin.projects.index', $project->id) }}" class="btn btn-small btn-primary">Back</a>
    </div>
@endsection
