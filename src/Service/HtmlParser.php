<?php

declare(strict_types=1);

namespace App\Service;

use App\Component\Response\HtmlParser\HtmlParsingResponse;

class HtmlParser
{
    public function parseHtmlTagsFromUrl(string $url): HtmlParsingResponse
    {
        $page = file_get_contents($url);

        preg_match_all('/<([^\/!][a-z]*)/i', $page,$matches);

        $results = array_count_values($matches[1]);

        return new HtmlParsingResponse(
            array_combine(array_keys($results), array_values($results))
        );
    }
}
