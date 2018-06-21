<?php

namespace spec\Markov\Generator;

use Markov\Generator\Generator;
use Markov\Generator\RandomStartGenerator;
use Markov\Graph\Graph;
use Markov\Graph\Link;
use Markov\Graph\Node;
use PhpSpec\ObjectBehavior;

class RandomStartGeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RandomStartGenerator::class);
        $this->shouldImplement(Generator::class);
    }

    function it_generate_a_text_from_a_graph_by_beginning_from_a_random_word()
    {
        // Arrange
        $graph = new Graph();
        $graph->addNode(Node::fromWord('Un')->addLink(Link::fromWord('simple')));
        $graph->addNode(Node::fromWord('simple')->addLink(Link::fromWord('test')));
        $graph->addNode(Node::fromWord('test'));

        // Act & Assert
        $this->generate($graph)->shouldBeString();
    }
}
