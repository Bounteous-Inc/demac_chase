<?php

/**
 * Class Demac_Chase_Model_Paymentech_Api_Adapter_Abstract
 *
 * This class contains the generic methods for any chase api adapter, specifically methods
 * that are relate to pulling information and values from the configuration.
 */
class Demac_Chase_Model_Paymentech_Api_Adapter_Abstract extends Mage_Core_Model_Abstract
{
    /**
     * Get Soapclient with the right settings and set it to the _client property
     */
    public function initializeApiClient()
    {
        // TODO: write logic here
        $wsdl = $this->getWsdlUrl();
        $soapclient_options = $this->getSoapClientOptions();
        $client = new SoapClient($wsdl, $soapclient_options);

    }

    public function getWsdlUrl()
    {
        // TODO: write logic here
    }
}
