<?php

class Demac_Chase_Model_Paymentech_Method extends Mage_Payment_Model_Method_Cc
{
    protected $_canAuthorize            = true;
    protected $_canVoid                 = true;
    protected $_canCapture              = true;
    protected $_canRefund               = true;
    protected $_canSaveCc               = false;
    protected $_canCapturePartial       = true;
    protected $_canRefundInvoicePartial = true;

    protected $_formBlockType = 'demac_chase/payment_form';
    protected $_infoBlockType = 'demac_chase/payment_info';

    protected $_code                    = 'demac_chase';

    public function canSaveCc()
    {
        return $this->_canSaveCc;
    }

    /**
     * Returns the current payment method unique code
     *
     * @return string
     */
    public function getCode()
    {
        if (empty($this->_code)) {
            Mage::throwException('Cannot retrieve the payment method code.');
        }
        return $this->_code;
    }

    /**
     * Authorize a Payment against the gateway
     *
     * @param Varien_Object $payment
     * @param float $amount
     * @return bool|Mage_Payment_Model_Abstract
     */
    public function authorize(Varien_Object $payment, $amount)
    {
        parent::authorize($payment, $amount);

        try {
            // TODO: Pending Implementation of the API Adapter
            return false;
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::throwException("Demac Chase PaymentTech Error: " . $e->getMessage());
        }
    }

    /**
     * Capture an already preauthorized payment
     *
     * @param Varien_Object $payment
     * @param float $amount
     * @return bool|Mage_Payment_Model_Abstract
     */
    public function capture(Varien_Object $payment, $amount)
    {
        parent::capture($payment, $amount);

        try {
            // TODO: Pending Implementation of the API Adapter
            return false;
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::throwException("Demac Chase PaymentTech Error: " . $e->getMessage());
        }
    }

    /**
     * Void an authorized payment
     *
     * @param Varien_Object $payment
     * @return bool|Mage_Payment_Model_Abstract
     */
    public function void(Varien_Object $payment)
    {
        parent::void($payment);

        try {
            // TODO: Pending Implementation of the API Adapter
            return false;
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::throwException("Demac Chase PaymentTech Error: " . $e->getMessage());
        }
    }

    /**
     * Refund a an already capture payment
     *
     * @param Varien_Object $payment
     * @param float $amount
     * @return bool|Mage_Payment_Model_Abstract
     */
    public function refund(Varien_Object $payment, $amount)
    {
        parent::refund($payment, $amount);

        try {
            // TODO: Pending Implementation of the API Adapter
            return false;
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::throwException("Demac Chase PaymentTech Error: " . $e->getMessage());
        }
    }

    /**
     * Cancel action for the payment
     *
     * If the payment was already capture then a credit memo needs to be created and the refund needs to be processed
     * otherwise the void payment action should be called
     *
     * @param Varien_Object $payment
     * @return bool|Mage_Payment_Model_Abstract
     */
    public function cancel(Varien_Object $payment)
    {
        parent::cancel($payment);

        try {
            // TODO: Pending Implementation of the API Adapter
            return false;
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::throwException("Demac Chase PaymentTech Error: " . $e->getMessage());
        }
    }
}
