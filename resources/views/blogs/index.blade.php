@extends('layouts.template')

@section('css')
    <!-- Our CSS files can go here when needed -->
    <style>
        <!-- Our CSS files can go here when needed -->
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
@stop

@section('content')
    <!-- Our main page content will go into this section -->
    @if(count($blogs) > 0)
        <div class="container">
            @foreach($blogs as $blog)
                <div class="blog-container">
                    <h2>{{ $blog->title }}</h2>
                    <p>{{ $blog->description }}</p>
                    <a href="/blog/{{ $blog->url }}">View Blog</a>
                </div>
            @endforeach
        </div>
    @endif
@stop

@section('js')
    <!-- Any additional JavaScript files will go into here -->
@stop
