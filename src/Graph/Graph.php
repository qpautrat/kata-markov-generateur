<?php

namespace Markov\Graph;

class Graph
{
    /**
     * @var Node[]
     */
    private $nodes;

    public function addNode(Node $node)
    {
        $this->nodes[] = $node;
    }

    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @param string $word
     * @return Node|null
     */
    public function selectNodeFromWord($word)
    {
        foreach ($this->nodes as $node) {
            if ($node->word() === $word) {
                return $node;
            }
        }

        return null;
    }
}
