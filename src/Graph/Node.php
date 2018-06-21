<?php

namespace Markov\Graph;

class Node
{
    private $word;

    private function __construct()
    {
    }

    public static function fromWord($word)
    {
        $node = new Node();

        $node->word = $word;

        return $node;
    }
}
