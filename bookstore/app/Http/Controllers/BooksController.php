<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Author;
use App\Models\Book;

class BooksController extends Controller
{
    public function getBooksByGenre($genre) {
        $books = Book::where('genre', '=', $genre)->paginate(15);
        return view('books.bookResults')->with('books', $books);
    }

    public function getBookDetailsByTitle($title) {
        $book = Book::where('title', $title)->first();
        return view('books.bookDetails')->with('book', $book);
    }

    public function getTopRatedBooks() {
        $books = Book::orderBy('rating', 'desc')->take(25)->get();
        return view('books.bookResults')->with('books', $books);
    }

    public function getBestSellersBooks() {
        $books = Book::orderBy('amount_sold', 'desc')->take(25)->get();
        return view('books.bookResults')->with('books', $books);
    }
}
