<?php

use App\Repository\User;
use App\ValueObject\Id;

require_once __DIR__ . '/../vendor/autoload.php';

$repository = new User();
$user = $repository->getUserById(new Id('asd'));

dd($user);
