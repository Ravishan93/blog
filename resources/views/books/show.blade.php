@extends('layouts.frontend')
@section('content')

<div class="card text-center mt-5 mb-5">
    <div class="card-header">
      {{ $book->id }}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $book->book_name }}</h5>
      <p class="card-text">{{ $book->price }}</p>
    </div>
    <div class="card-footer text-muted">
        {{  date('Y-m-d',strtotime($book->created_at)) }}
    </div>
    <!--<p class="card-text">{{ $users->name }}</p>-->
    
  </div>

@endsection