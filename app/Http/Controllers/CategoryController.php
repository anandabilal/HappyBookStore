<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getBookCategory($id)
    {
        $bookCategory = DB::select('SELECT b.id, b.title, d.author FROM books b, details d, categories c WHERE b.id = d.book_id AND b.category_id = c.id AND c.id = ?', [$id]);
        $category = app('App\Http\Controllers\CategoryController')->getAllCategory();
        $title = "Category";
        return view('category', compact('bookCategory', 'category', 'title'));
    }

    public function getAllCategory()
    {
        $category = DB::select('SELECT * FROM categories');
        return $category;
    }

    public function getAllCategoryOnly()
    {
        $category = app('App\Http\Controllers\CategoryController')->getAllCategory();
        $title = "Contact";
        return view('contact', compact('category', 'title'));
    }
}
