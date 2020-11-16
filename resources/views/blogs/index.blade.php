@extends('layouts.template')

@section('css')
    <!-- Our CSS files can go here when needed -->
@stop

@section('content')
    <!-- Our main page content will go into this section -->
    <div class="row text-center">
        @if(count($blogs) > 0)
            @foreach($blogs as $blog)
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="blogimage.jpg" alt="Blog Image" width="400" height="300">
                        <p><strong>{{ $blog->title }}</strong></p>
                        <p>{{ $blog->description }}</p>
                        <a href="/blog/{{ $blog->url }}" class="card-link">View Blog</a>
                    </div>
                </div>
            @endforeach
        @endif
      </div>
@stop

@section('js')
    <!-- Any additional JavaScript files will go into here -->
@stop
