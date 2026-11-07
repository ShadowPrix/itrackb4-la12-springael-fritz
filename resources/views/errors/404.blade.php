@extends('layouts.app')

@section('title', 'Page not found')

@section('content')
    <h1>Page not found</h1>
    <p>Sorry, that movie or page doesn't exist. Check the address, or head back to the list.</p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to the list</a>
@endsection