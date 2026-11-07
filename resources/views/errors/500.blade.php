@extends('layouts.app')

@section('title', 'Something went wrong')

@section('content')
    <h1>Something went wrong</h1>
    <p>Sorry, that was our mistake, not yours. We've recorded the problem and will look into it. Please try again in a moment.</p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to the list</a>
@endsection