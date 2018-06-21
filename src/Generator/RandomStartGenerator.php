<?php

namespace Markov\Generator;

use Markov\Graph\Graph;
use Markov\Graph\Node;

class RandomStartGenerator implements Generator
{
    public function generate(Graph $graph): string
    {
        /** @var Node $node */
        $nodes = $graph->getNodes();
        $node = $nodes[array_rand($nodes)];
        $words = [];

        do {
            $words[] = $node->word();
            $link = $node->selectLink();
            if (null === $link) {
                break;
            }
            $node = $graph->selectNodeFromWord($link->word());
        } while (null !== $node);

        return implode(' ', $words);
    }
}
