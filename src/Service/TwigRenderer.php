<?php

declare(strict_types=1);

namespace App\Service;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

class TwigRenderer
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new ArrayLoader([
            'index' => file_get_contents(dirname(__DIR__) . '/../templates/index.html.twig'),
        ]);

        $this->twig = new Environment($loader);
    }

    public function renderTemplate(string $name, array $args = []): string
    {
        return $this->twig->render($name, $args);
    }
}