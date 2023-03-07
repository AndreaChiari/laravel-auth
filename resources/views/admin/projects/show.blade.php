@extends('layouts.app')

@section('content')
    <header>{{ $project->name }}</header>
    <p>{{ $project->description }}</p>
@endsection
