<?php

namespace App\Entities;

use App\Enums\BookStatus;
use CodeIgniter\Entity\Entity;

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
}
