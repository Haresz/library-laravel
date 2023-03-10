<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $book = $request->get('filter'); // Get search value

        if ($book) { // If search value not empty
            $books = Book::where('judul', 'like', '%' . $book . '%')->paginate(10); // Get books by search value
        } else { // If search value empty
            $books = Book::paginate(10); // Get all books
        }

        return view('pages.dashboard.admin', compact('books')); // Return view with data
    }
}
