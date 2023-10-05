<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Author;
use App\Models\AuthorModel;
use CodeIgniter\HTTP\RedirectResponse;

class Authors extends BaseController
{
    public function index(): string 
    {
        $authorModel = new AuthorModel();
        $authors = $authorModel->findAll();

        return view('/authors/index', [
            'authors' => $authors
        ]);
    }

    public function new(): string
    {
        $author = new Author();

        return view('/authors/new', [
            'author' => $author
        ]);
    }

    public function create(): RedirectResponse
    {
        $author = new Author($this->request->getPost());
        $authorModel = new AuthorModel();

        if ($authorModel->insert($author)) {
            return redirect()->to('/authors');
        }

        $errors = $authorModel->errors();
        return redirect()->to('/authors/new')->with('errors', $errors)->withInput();
    }

    public function edit(string $id): string | RedirectResponse
    {
        $authorModel = new AuthorModel();
        $author = $authorModel->find($id);

        if (null === $author) {
            return redirect()->to('/authors');
        }

        return view('authors/edit', [
            'author' => $author
        ]);
    }

    public function update(string $id): RedirectResponse
    {
        $authorModel = new AuthorModel();
        $author = new Author($this->request->getPost());

        if ($authorModel->update($id, $author)) {
            return redirect()->to('/authors');
        }

        $errors = $authorModel->errors();
        return redirect()->to("/authors/edit/$id")->with('errors', $errors);
    }
}
