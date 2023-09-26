<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class Books extends BaseController
{
    public function index(): string 
    {
        $bookModel = new BookModel();
        $books = $bookModel->findAll();

        return view('books/index', $books);
    }
}
