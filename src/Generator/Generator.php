<?php

namespace Markov\Generator;

use Markov\Graph\Graph;

interface Generator
{
    public function generate(Graph $grap): string;
}
