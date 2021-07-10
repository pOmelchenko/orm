<?php

use App\Repository;
use App\ValueObject\Id;

require_once __DIR__ . '/../vendor/autoload.php';

$repository = new Repository\User();
$user = $repository->getById(new Id('asd'));

dd($user);
