<?php

namespace spec\Markov\Generator;

use Markov\Generator\Generator;
use Markov\Graph\Graph;
use Markov\Graph\Link;
use Markov\Graph\Node;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Generator::class);
    }

    function it_generate_a_text_from_a_graph()
    {
        // Arrange
        $graph = new Graph();
        $graph->addNode(Node::fromWord('Un')->addLink(Link::fromWord('simple')));
        $graph->addNode(Node::fromWord('simple')->addLink(Link::fromWord('test')));
        $graph->addNode(Node::fromWord('test'));

        // Act & Assert
        $this->generate($graph)->shouldReturn('Un simple test');
    }
}
