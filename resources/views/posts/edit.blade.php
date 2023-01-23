@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Updating Post') }}:{{ $post->title}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        <div class="form-group">
                          <label>Post Title</label>
                          <input type="text"  name="title" value="{{ $post->title}}" class="form-control" required>
                          <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                        </div>

                        <div class="form-group">
                            <label>Post Description</label>
                            <textarea name="description" cols="30" rows="5" class="form-control"  required>{{ $post->description }}</textarea>
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection