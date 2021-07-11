<?php

namespace Core\Application;

abstract class Application
{
    private static Application $instance;

    public static function init(): self
    {
        return self::$instance ??= new static();
    }

    private function __construct()
    {
        $this->bootstrap();
    }

    abstract protected function bootstrap(): void;
}
