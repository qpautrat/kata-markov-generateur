<?php

namespace spec\Markov\Graph;

use Markov\Graph\Link;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LinkSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('fromWord',['ta']);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Link::class);
    }

    function it_get_word()
    {
        $this->word()->shouldReturn('ta');
    }
}
