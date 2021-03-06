<?php

namespace Markov\Generator;

use Markov\Graph\Graph;
use Markov\Graph\Node;

class SameGenerator implements Generator
{
    public function generate(Graph $graph): string
    {
        /** @var Node $node */
        $node = current($graph->getNodes());
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
