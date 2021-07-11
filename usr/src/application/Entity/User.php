<?php

namespace App\Entity;

use App\ValueObject\{
    Id,
    Name,
};

class User
{
    public function __construct(
        private Id $id,
        private Name $name,
    ) {
        // ..
    }

    /**
     * @return Id
     */
    public function getId(): Id
    {
        return $this->id;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }
}