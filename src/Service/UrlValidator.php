<?php

declare(strict_types=1);

namespace App\Service;

class UrlValidator
{
    public function isUrlValid(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}