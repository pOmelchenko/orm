<?php


namespace App\ValueObject;

use DomainException;

abstract class ValueObject
{
    protected string $exception = ValueObjectException::class;

    private string $value;

    public function __construct(string $value)
    {
        if (!$this->validate($value)) {
            throw $this->throwException();
        }

        $this->value = $value;
    }

    protected function validate(string $value): bool
    {
        return true;
    }

    private function throwException(): DomainException
    {
        return new $this->exception;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
