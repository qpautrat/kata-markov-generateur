<?php

namespace spec\Markov\Graph;

use Markov\Graph\Graph;
use Markov\Graph\Link;
use Markov\Graph\Node;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GraphSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Graph::class);
    }

    function it_add_node()
    {
        // Arrange
        $node = Node::fromWord('node');
        $node->addLink(Link::fromWord('link'));

        // Act
        $this->addNode($node);

        // Assert
        $this->getNodes()->shouldReturn([$node]);
    }

    function it_select_node_from_word()
    {
        // Arrange
        $node = Node::fromWord('node');
        $node2 = Node::fromWord('node2');
        $this->addNode($node);
        $this->addNode($node2);

        // Act & Assert
        $this->selectNodeFromWord('node2')->shouldReturn($node2);
    }
}
