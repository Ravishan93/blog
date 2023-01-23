@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="form-group">
                          <label>Post Title</label>
                          <input type="text"  name="title" class="form-control" placeholder="Enter Post Title here..." required>
                          <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                        </div>

                        <div class="form-group">
                            <label>Post Description</label>
                            <textarea name="description" cols="30" rows="5" class="form-control" placeholder="Enter Post Description here..." required></textarea>
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Post</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
