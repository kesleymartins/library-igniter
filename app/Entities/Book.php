<?php

namespace App\Entities;

use App\Enums\BookStatus;
use CodeIgniter\Entity\Entity;

class Book extends Entity
{
    protected $datamap = [];
    protected $dates   = [];
    protected $casts   = [];

    public function statusName()
    {
        $status = BookStatus::from($this->status);

        return $status->name();
    }
}
