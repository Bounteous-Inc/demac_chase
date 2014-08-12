<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Demac_Chase_Model_Paymentech_Api_Adapter_AbstractSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Demac_Chase_Model_Paymentech_Api_Adapter_Abstract');
    }

    function it_should_have_a_wsdl_url()
    {
        $this->getWsdlUrl()->shouldReturn('https://ws.paymentech.net/PaymentechGateway/wsdl/PaymentechGateway.wsdl');
    }

    function it_should_return_the_soap_client_options()
    {
        $this->getSoapClientOptions()->shouldReturn();
    }

    function it_should_have_a_wsdl_client()
    {
        $this->initializeApiClient()->shouldReturn($this);
    }


}
