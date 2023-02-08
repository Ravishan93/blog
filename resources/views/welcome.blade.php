@extends('layouts.frontend')
@section('content')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8 mt-5">

          @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  
          <table class="table">
              <thead class="table-dark">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
              </thead>
              <tbody>
                  @foreach ($books as $book)

                  <tr>
                      <th scope="row">{{ $book->id }}</th>
                      <td> {{ $book->book_name }}</td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 300px;">
                          {{ $book->price }}
                        </span> </td>
                      <td>
                          {{-- <a href="{{ route('borrow', $book->id) }}" class="btn btn-sm btn-primary">Borrow Book</a> --}}
                          <a href="" class="btn btn-sm btn-primary">Borrow Book</a>
                      </td>
                    </tr>
                      
                  @endforeach
              </tbody>
            </table>
      </div>
  </div>
</div>

@endsection