<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function getBookTitleAndAuthor()
    {
        $bookTitleAuthor = DB::select('SELECT b.id, b.title, d.author FROM books b, details d WHERE b.id = d.book_id');
        $category = app('App\Http\Controllers\CategoryController')->getAllCategory();
        $title = "Home"; 
        return view('home', compact('bookTitleAuthor', 'category', 'title'));
    }
}
