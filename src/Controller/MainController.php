<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\HtmlParser;
use App\Service\TwigRenderer;
use App\Service\UrlValidator;

class MainController
{
    private HtmlParser $htmlParser;
    private TwigRenderer $twigRenderer;
    private UrlValidator $urlValidator;

    public function __construct()
    {
        $this->htmlParser = new HtmlParser();
        $this->twigRenderer = new TwigRenderer();
        $this->urlValidator = new UrlValidator();
    }

    public function index(): string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $url = $_POST["webUrl"] ?? '';

            if (!$this->urlValidator->isUrlValid($url)) {
                return $this->twigRenderer->renderTemplate('index', ['error' => 'Invalid url provided.']);
            }

            $htmlParserResponse = $this->htmlParser->parseHtmlTagsFromUrl($url);

            return $this->twigRenderer->renderTemplate('index', ['htmlTags' => $htmlParserResponse->getItems()]);
        }

        return $this->twigRenderer->renderTemplate('index');
    }
}
