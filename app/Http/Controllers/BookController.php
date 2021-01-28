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
}
