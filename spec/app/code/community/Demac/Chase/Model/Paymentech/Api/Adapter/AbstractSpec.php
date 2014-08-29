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

    function let(\Demac_Chase_Model_Adapter_DatabaseAdapter $adapter)
    {
        $this->beConstructedWith(array('database_adapter' => $adapter));
    }

    function it_should_have_a_wsdl_url($adapter)
    {
        $adapter->getConfigValue('payment/demac_chase/wsdl',null)
                ->willReturn('https://ws.paymentech.net/PaymentechGateway/wsdl/PaymentechGateway.wsdl');

        $this->getWsdlUrl()->shouldReturn('https://ws.paymentech.net/PaymentechGateway/wsdl/PaymentechGateway.wsdl');
    }

    function it_should_return_the_soap_client_options()
    {
        $this->getSoapClientOptions()->shouldBeArray();
    }

    function it_should_have_a_wsdl_client($adapter)
    {
        $adapter->getConfigValue('payment/demac_chase/wsdl',null)
                ->willReturn('https://ws.paymentech.net/PaymentechGateway/wsdl/PaymentechGateway.wsdl');
        $adapter->getConfigValue('payment/demac_chase/login',null)
                ->willReturn('login');
        $adapter->getConfigValue('payment/demac_chase/password',null)
                ->willReturn('password');

        $this->initializeApiClient()->shouldReturnAnInstanceOf('SoapClient');
    }
}
