<?php

namespace App\Entities;

use App\Enums\BookStatus;
use CodeIgniter\Entity\Entity;
use App\Models\AuthorModel;

class Book extends Entity
{
    protected $datamap = [];
    protected $dates   = [];
    protected $casts   = [];

    /**
     * Retorna o nome do status
     *
     * @return string
     */
    public function statusName(): string
    {
        $status = BookStatus::from($this->status);

        return $status->name();
    }

    /**
     * Retorna a Entity do Autor em que o livro pertence
     *
     * @return Author
     */
    public function author(): Author
    {
        $authorModel = new AuthorModel();
        $author = $authorModel->find($this->attributes['author_id']);

        return $author;
    } 
}
