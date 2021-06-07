<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index(){
        $books = Book::all();
        $categories = Category::all();

        return view('welcome',['books' => $books,'categories' => $categories]);

    }
}
