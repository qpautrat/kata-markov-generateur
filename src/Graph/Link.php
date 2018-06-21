<?php

namespace Markov\Graph;

class Link
{
    private $word;

    private function __construct()
    {
    }

    public static function fromWord($word)
    {
        $link = new Link();

        $link->word = $word;

        return $link;
    }
}
