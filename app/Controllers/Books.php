<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Book;
use App\Models\BookModel;
use App\Models\AuthorModel;
use CodeIgniter\HTTP\RedirectResponse;

class Books extends BaseController
{
    public function index(): string
    {
        $bookModel = new BookModel();
        $books = $bookModel->findAll();

        return view('books/index', [
            'books' => $books
        ]);
    }

    public function new(): string
    {
        $book = new Book();

        $authorModel = new AuthorModel();
        $authors = $authorModel->findAll();

        return view('books/new', [
            'book' => $book,
            'authors' => $authors
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

    public function edit(string $id): string | RedirectResponse
    {
        $bookModel = new BookModel();
        $book = $bookModel->find($id);

        if (null == $book) {
            return redirect()->to('/books');
        }

        $authorModel = new AuthorModel();
        $authors = $authorModel->findAll();

        return view('books/edit', [
            'book' => $book,
            'authors' => $authors
        ]);
    }

    public function update(string $id): RedirectResponse
    {
        $bookModel = new BookModel();
        $book = new Book($this->request->getPost());

        if ($bookModel->update($id, $book)) {
            return redirect()->to('/books');
        }

        $errors = $bookModel->errors();
        return redirect()->to("/books/edit/$id")->with('errors', $errors);
    }

    public function delete(string $id): RedirectResponse
    {
        $bookModel = new BookModel();

        if ($bookModel->delete($id)) {
            return redirect()->to('/books');
        }

        return redirect()->to('/books');
    }
}
