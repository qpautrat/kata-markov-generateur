<?php

namespace Markov\Generator;

use Markov\Graph\Graph;

class CanonGenerator
{
    public function generate(Graph $graph): string
    {
        /** @var Node $node */
        $node = $graph->getNodes()[1];
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
