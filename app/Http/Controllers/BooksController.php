<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    //
    public function getAllBooks(){
        return Books::all();
    }
}
