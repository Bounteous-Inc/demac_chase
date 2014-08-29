<?php

/**
 * Class Demac_Chase_Model_Adapter_DatabaseAdapter
 */
class Demac_Chase_Model_Adapter_DatabaseAdapter extends Mage_Core_Model_Abstract
{
    public function getConfigValue($path, $storeId)
    {
        if (null === $storeId) {
            $storeId = $this->getStore();
        }
        return Mage::getStoreConfig($path);
    }

    public function getStore()
    {
        return Mage::app()->getStore();
    }
}
