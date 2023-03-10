<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $book = $request->get('search'); // Get search value

        if ($book) { // If search value not empty
            $books = Book::where('judul', 'like', '%' . $book . '%')->paginate(12); // Get books by search value
        } else { // If search value empty
            $books = Book::paginate(12); // Get all books
        }

        return view('pages.dashboard.buku', compact('books')); // Return view with data
    }
}
