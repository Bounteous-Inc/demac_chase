<?php

/**
 * Class Demac_Chase_Model_Paymentech_Api_Adapter_Abstract
 *
 * This class contains the generic methods for any chase api adapter, specifically methods
 * that are relate to pulling information and values from the configuration.
 */
class Demac_Chase_Model_Paymentech_Api_Adapter_Abstract extends Mage_Core_Model_Abstract
{
    private $_databaseAdapter;
    protected $_code = 'demac_chase';

    /**
     * Construct based on the pattern demonstrated by @jcowie
     *
     * Advantages:
     * - A cleanear module that is focused on its own logic.
     * - We avoid mixing the module logic with Magento code.
     *
     * Disavantages:
     * - There might problems with compilation, not to mention that instantiating the class directly is a
     * 'dirtier' approach
     *
     * @param array $services
     */
    public function __construct(array $services = array())
    {
        if (isset($services['database_adapter'])) {
            $this->_databaseAdapter = $services['database_adapter'];
        } else {
            $this->_databaseAdapter = new Demac_Chase_Model_Adapter_DatabaseAdapter();
        }
    }

    /**
     * Get Soapclient with the right settings and set it to the _client property
     *
     * @return SoapClient
     */
    public function initializeApiClient()
    {
        $wsdl = $this->getWsdlUrl();
        $soapclient_options = $this->getSoapClientOptions();
        $client = new SoapClient($wsdl, $soapclient_options);

        return $client;
    }

    /**
     * Get the wsdl gateway url
     *
     * @return mixed
     */
    public function getWsdlUrl()
    {
        $wsdlUrl = $this->getConfig('wsdl');
        return $wsdlUrl;
    }

    /**
     * Get the soap client options, for now login and password
     *
     * @return array
     */
    public function getSoapClientOptions()
    {
        $soapOptions = array();
        $soapOptions['login']       = $this->getConfig('login');
        $soapOptions['password']    = $this->getConfig('password');

        return $soapOptions;
    }

    /**
     * Configuration function that uses the databaseAdapter
     *
     * @param $field
     * @param null $storeId
     * @return mixed
     */
    protected function getConfig($field, $storeId=null)
    {
        $path = 'payment/'.$this->_code.'/'.$field;
        return $this->_databaseAdapter->getConfigValue($path,$storeId);
    }
}
