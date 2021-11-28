<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function getBookDetail($id)
    {
        $bookDetail = DB::select('SELECT b.title, d.author, d.publisher, d.year, d.description FROM books b, details d WHERE b.id = d.book_id AND d.book_id = ?', [$id]);
        $category = app('App\Http\Controllers\CategoryController')->getAllCategory();
        $title = "Book Detail";
        return view('detail', compact('bookDetail', 'category', 'title'));
    }
}
