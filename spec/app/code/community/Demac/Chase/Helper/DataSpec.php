<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Demac_Chase_Helper_DataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Demac_Chase_Helper_Data');
    }
}
