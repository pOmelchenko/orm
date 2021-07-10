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

    public static function map($id, $name)
    {
        return new self (
            new Id($id),
            new Name($name),
        );
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