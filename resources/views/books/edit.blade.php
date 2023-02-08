@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Updating Book') }}:{{ $book->book_name}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('books.update', $book->id) }}">
                        @csrf
                        <div class="form-group">
                            <label>Book Name</label>
                            <input type="text"  name="book_name" class="form-control" placeholder="{{( $book->book_name) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Book Price</label>
                            <input type="text"  name="price" class="form-control" placeholder="{{( $book->price) }}" required>
                        </div>

                        
                        <div class="form-group">    
                            <label for="role" class="col-md-4 col-form-label text-md-right">Type</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="type" name="category" required focus>
                                        <option value="Short Story"  selected>Short Story</option>        
                                        <option value="Long Story"  selected>Long Story</option>        
                                    </select>
                                </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection