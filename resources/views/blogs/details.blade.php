@extends('layouts.template')

@section('meta-title')
    {{ $blog->meta_title }}
@stop

@section('meta-description')
    {{ $blog->meta_description }}
@stop

@section('css')
    <!-- Our CSS files can go here when needed -->
@stop

@section('content')
    <!-- Our main page content will go into this section -->
    <div class="container">
        <div class="blog-container">
            <h2>{{ $blog->title }}</h2>
            <p>{{ $blog->description }}</p>
        </div>
    </div>
@stop

@section('js')
    <!-- Any additional JavaScript files will go into here -->
@stop
