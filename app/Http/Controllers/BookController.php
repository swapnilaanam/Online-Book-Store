<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // This function helps us to view all the books (read)
    public function index() {

        $books = Book::latest()->paginate(5);

        return view('books.index', compact('books'));
    }

    // gives a form(view) to create new book (create)
    public function create() {
        return view('books.create');
    }

    // stores the newly added book to the database (create)
    public function store(Request $request) {
        $request->validate([
            'book_id'=>'required',
            'book_name'=>'required',
            'writer_name'=>'required',
            'published_year'=>'required',
            'price'=>'required',
            'book_image'=>'required',
            'book_description'=>'required'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', "Book Successfully Added...");
    }

}
