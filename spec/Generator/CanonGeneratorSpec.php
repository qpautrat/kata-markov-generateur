<?php

namespace spec\Markov\Generator;

use Markov\Generator\CanonGenerator;
use Markov\Graph\Graph;
use Markov\Graph\Link;
use Markov\Graph\Node;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CanonGeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CanonGenerator::class);
    }

    function it_generate_a_text_from_a_graph_by_beginning_from_second_word()
    {
        // Arrange
        $graph = new Graph();
        $graph->addNode(Node::fromWord('Un')->addLink(Link::fromWord('simple')));
        $graph->addNode(Node::fromWord('simple')->addLink(Link::fromWord('test')));
        $graph->addNode(Node::fromWord('test'));

        // Act & Assert
        $this->generate($graph)->shouldReturn('simple test');
    }
}
