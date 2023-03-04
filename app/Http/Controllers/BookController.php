<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function index()
    {
        return view('listbuku', [
                "title" => "title",
                "book" => book::all()
            ]
        );
    }
}
