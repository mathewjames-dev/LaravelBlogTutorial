@extends('layouts.template')

@section('css')
    <!-- Our CSS files can go here when needed -->
@stop

@section('content')
    <!-- Our main page content will go into this section -->
    @if(count($blogs) > 0)
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text text-muted">{{ $blog->description }}</p>
                            <a href="/blog/{{ $blog->url }}" class="card-link">View Blog</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endif
@stop

@section('js')
    <!-- Any additional JavaScript files will go into here -->
@stop
