<?php

namespace spec\Markov\Graph;

use Markov\Graph\Node;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NodeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('fromWord', ['de']);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Node::class);
    }
}
