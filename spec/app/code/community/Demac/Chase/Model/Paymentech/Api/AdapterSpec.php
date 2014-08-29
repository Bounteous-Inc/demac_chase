<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Demac_Chase_Model_Paymentech_Api_AdapterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Demac_Chase_Model_Paymentech_Api_Adapter');
    }

    function it_should_extend_the_adapter_abstract()
    {
        $this->shouldHaveType('Demac_Chase_Model_Paymentech_Api_Adapter_Abstract');
    }
}
