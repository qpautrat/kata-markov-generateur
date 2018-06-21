<?php

namespace spec\Markov\Graph;

use Markov\Graph\Link;
use Markov\Graph\Node;
use PhpSpec\ObjectBehavior;

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

    function it_add_link()
    {
        // Arrange
        $link = Link::fromWord('ta');

        // Act
        $this->addLink($link);

        // Assert
        $this->getLinks()->shouldHaveCount(1);
    }
}
