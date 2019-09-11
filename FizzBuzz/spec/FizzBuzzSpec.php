<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_shoult_match_1_5()
    {
        $this->getFizzBuzz(1, 5)->shouldReturn([ 1, 2, 'fizz', 4, 'buzz']);
    }

    function it_shoult_match_5_15()
    {
        $this->getFizzBuzz(5, 15)->shouldReturn(['buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz']);
    }
}
