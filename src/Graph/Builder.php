<?php

namespace Markov\Graph;

class Builder
{
    public function build($text)
    {
        $graph = new Graph();
        $words = explode(' ', $text);

        $nbWords = count($words);
        for ($i = 0; $i < $nbWords; $i++) {
            $node = Node::fromWord($words[$i]);
            if ($i + 1 < $nbWords) {
                $node->addLink(Link::fromWord($words[$i+1]));
            }
            $graph->addNode($node);
        }

        return $graph;
    }
}
