<?php

namespace spec\Markov\Graph;

use Markov\Graph\Builder;
use Markov\Graph\Graph;
use Markov\Graph\Link;
use Markov\Graph\Node;
use PhpSpec\ObjectBehavior;

class BuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Builder::class);
    }

    function it_build_a_graph_from_a_text()
    {
        // Arrange
        $text = 'Un simple test';
        $graph = new Graph();
        $graph->addNode(Node::fromWord('Un')->addLink(Link::fromWord('simple')));
        $graph->addNode(Node::fromWord('simple')->addLink(Link::fromWord('test')));
        $graph->addNode(Node::fromWord('test'));

        // Act & Assert
        $this->build($text)->shouldBeLike($graph);
    }
}
