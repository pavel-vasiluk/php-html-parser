<?php

declare(strict_types=1);

namespace App\Component\Response\HtmlParser;

use App\Component\Response\AbstractResponse;
use JetBrains\PhpStorm\ArrayShape;

class HtmlParsingResponse extends AbstractResponse
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    #[ArrayShape(['items' => 'array'])]
    public function jsonSerialize(): array
    {
        return [
            'items' => $this->getItems(),
        ];
    }
}
