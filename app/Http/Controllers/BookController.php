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

    // This function helps us to view a single book (single read/show)
    public function show(Book $book) {
        return view('books.show', compact('book'));
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

    // gives a form(view) to edit existing book (update)
    public function edit(Book $book) {
        return view('books.edit', compact('book'));
    }

    // updates the edited book to the database (update)
    public function update(Request $request, Book $book) {
        $request->validate([
            'book_id'=>'required',
            'book_name'=>'required',
            'writer_name'=>'required',
            'published_year'=>'required',
            'price'=>'required',
            'book_image'=>'required',
            'book_description'=>'required'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', "Book Successfully Updated...");
    }

    // deletes a book from the database (delete) 
    public function destroy(Book $book) {
        $book->delete();

        return redirect()->route('books.index')->with('success', "Book Successfully Deleted...");
    }
}
