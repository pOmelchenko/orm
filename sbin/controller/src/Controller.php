<?php

namespace Core\Controller;

use Core\Router\Router;

abstract class Controller
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    abstract protected function registerRoutes(): void;
}