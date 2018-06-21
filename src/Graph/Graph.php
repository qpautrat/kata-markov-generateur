<?php

namespace Markov\Graph;

class Graph
{
    private $nodes;

    public function addNode(Node $node)
    {
        $this->nodes[] = $node;
    }

    public function getNodes()
    {
        return $this->nodes;
    }
}
