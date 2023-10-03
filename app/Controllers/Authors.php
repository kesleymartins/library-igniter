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
}
