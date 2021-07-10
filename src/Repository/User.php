<?php

namespace App\Repository;

use App\Entity;
use App\ValueObject\Id;
use PDO;

class User
{
    protected string $entityMapper = Mapper\User::class;

    private PDO $entityManager;

    public function __construct()
    {
        $user = 'root';
        $pass = '';

        $this->entityManager = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    }

    public function getUserById(Id $id): Entity\User
    {
        $sth = $this->entityManager->prepare('SELECT id, name FROM test.users WHERE id = :id');


        $sth->execute([':id' => $id->getValue()]);

        return $sth->fetchObject($this->entityMapper)->map();
    }
}