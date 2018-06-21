<?php

namespace Markov\Graph;

class Node
{
    private $word;
    private $links;

    private function __construct()
    {
    }

    public static function fromWord($word)
    {
        $node = new Node();

        $node->word = $word;

        return $node;
    }

    public function addLink(Link $link)
    {
        $this->links[] = $link;
    }

    public function getLinks()
    {
        return $this->links;
    }
}
