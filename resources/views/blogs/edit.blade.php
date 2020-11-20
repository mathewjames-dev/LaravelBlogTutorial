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

            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" class="form-control" name="title" value="{{ isset($blog) ? $blog->title : '' }}" aria-describedby="title" 
                placeholder="Enter Blog Title">
            </div>

            <div class="form-group">
                <label for="description">Blog Description</label>
                <input type="text" class="form-control" name="description" value="{{ isset($blog) ? $blog->description : '' }}" aria-describedby="description" 
                placeholder="Enter Blog Description">
            </div>

            <div class="form-group">
                <label for="url">Blog URL</label>
                <input type="text" class="form-control" name="url" value="{{ isset($blog) ? $blog->url : '' }}" aria-describedby="url" 
                placeholder="Enter Blog URL">
            </div>

            <div class="form-group">
                <label for="url">Blog Meta Title</label>
                <input type="text" class="form-control" name="meta_title" value="{{ isset($blog) ? $blog->meta_title : '' }}" aria-describedby="meta_title" 
                placeholder="Enter Blog Meta Title">
            </div>

            <div class="form-group">
                <label for="url">Blog Meta Description</label>
                <input type="text" class="form-control" name="meta_description" value="{{ isset($blog) ? $blog->meta_description : '' }}" aria-describedby="meta_description" 
                placeholder="Enter Blog Meta Description">
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="live" {{ isset($blog) && $blog->live == 1 ? 'checked' : '' }} name="live">
                <label class="custom-control-label" for="live">Check this to set the blog live</label>
            </div>

            <button class="form-control" type="submit">Save</button>
        </form>
    </div>
@stop

@section('js')
    <!-- Any additional JavaScript files will go into here -->
@stop
