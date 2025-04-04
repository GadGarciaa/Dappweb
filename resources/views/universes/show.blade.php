@extends('layouts.main')

@section('title', 'Universe Details')

@section('content')
    <h1>Universe Details</h1>

    <p><strong>ID:</strong> {{ $universe->id }}</p>
    <p><strong>Name:</strong> {{ $universe->name }}</p>

    <a href="{{ route('universes.index') }}">Back to List</a>
@endsection