<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Demac_Chase_Model_Adapter_DatabaseAdapterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Demac_Chase_Model_Adapter_DatabaseAdapter');
    }
}
