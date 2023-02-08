<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $book = new Book();

        $book->book_name = $request->input('book_name');
        $book->price = $request->input('price');
        $book->category = $request->input('category');
        // $ticket->description = $request->input('description');
        // $ticket->ref = sha1(time());
        // $ticket->status = 0;

        $book->save();
        }

    public function show($bookId){
        $book = Book::findOrFail($bookId);

        return view('books.show', compact('book'));
    }

    public function edit($bookId){
        $book = Book::findOrFail($bookId);

        return view('books.edit', compact('book'));
    }

    public function update($bookId, Request $request){

        Book::findOrFail($bookId)->update($request->all());

        return redirect(route('books.all'))->with('Book Updated!');
    }

    public function delete($bookId){

        Book::findOrFail($bookId)->delete();

        return redirect(route('books.all'));

    }
}
