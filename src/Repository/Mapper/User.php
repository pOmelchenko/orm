<?php

namespace App\Repository\Mapper;

use App\Entity;
use App\ValueObject\Id;
use App\ValueObject\Name;

class User
{
    private string $id;
    private string $name;

    public function map(): Entity\User
    {
        return new Entity\User(
            new Id($this->id),
            new Name($this->name),
        );
    }
}