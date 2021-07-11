<?php

namespace App\ValueObject;

use DomainException;

class ValueObjectException extends DomainException
{
    protected $message = 'Default Value Object exception message';
}
