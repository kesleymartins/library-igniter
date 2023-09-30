<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Book;
use App\Models\BookModel;
use CodeIgniter\HTTP\RedirectResponse;

class Books extends BaseController
{
    public function index(): string
    {
        $bookModel = new BookModel();
        $books = $bookModel->findAll();

        return view('books/index', $books);
    }

    public function new(): string
    {
        $book = new Book();

        return view('books/new', [
            'book' => $book
        ]);
    }

    public function create(): RedirectResponse 
    {
        $book = new Book($this->request->getPost());

        $bookModel = new BookModel();

        if ($bookModel->insert($book)) {
            return redirect()->to('/books');
        }

        $errors = $bookModel->errors();
        return redirect()->to('/books/new')->with('errors', $errors)->withInput();
    }

    public function edit(string $id): string
    {
        $bookModel = new BookModel();
        $book = $bookModel->find($id);

        return view('books/edit', [
            'book' => $book
        ]);
    }

    public function update(string $id): RedirectResponse
    {
        $bookModel = new BookModel();
        $book = new Book($this->request->getPost());

        $errors = $bookModel->errors();
        return redirect()->to("/books/edit/$id")->with('errors', $errors);
    }
}
