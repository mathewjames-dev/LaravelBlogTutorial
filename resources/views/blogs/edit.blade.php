@extends('layouts.template')

@section('css')
    <style>
        <!-- Our CSS files can go here when needed -->
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .container > form {
            text-align: center;
        }

        .container > form > label {
            clear: both;
            width: 50%;
        }

        .container > form > input, button {
            width: 50%;
            margin-bottom: 20px;
        }
    </style>
@stop

@section('content')
    <!-- Our main page content will go into this section -->
    <div class="container">
        <form method="POST" action="{{ route('blog.store') }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ isset($blog) ? $blog->id : '' }}">

            <label for="title">Blog Title</label>
            <input type="text" name="title" value="{{ isset($blog) ? $blog->title : '' }}"
                placeholder="Enter Blog Title">

            <label for="description">Blog Description</label>
            <input type="text" name="description" value="{{ isset($blog) ? $blog->description : '' }}"
                placeholder="Enter Blog Description">

            <label for="url">Blog URL</label>
            <input type="text" name="url" value="{{ isset($blog) ? $blog->url : '' }}"
                placeholder="Enter Blog URL">

            <label for="live">Set Blog Live</label>
            <input type="checkbox" {{ isset($blog) && $blog->live == 1 ? 'checked' : '' }}>

            <button type="submit">Save</button>
        </form>
    </div>
@stop

@section('js')
    <!-- Any additional JavaScript files will go into here -->
@stop
