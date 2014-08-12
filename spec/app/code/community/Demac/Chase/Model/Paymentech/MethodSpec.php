<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PhpSpec\Exception\Example\PendingException;

class Demac_Chase_Model_Paymentech_MethodSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Demac_Chase_Model_Paymentech_Method');
    }

    function it_should_extend_the_base_credit_card_class()
    {
        $this->shouldHaveType('Mage_Payment_Model_Method_Cc');
    }

    function it_should_have_a_payment_code()
    {
        $this->getCode()->shouldReturn('demac_chase');
    }

    function it_can_autorize_payments()
    {
        $this->canAuthorize()->shouldReturn(true);
    }

    function it_can_void_payments(\Varien_Object $payment)
    {
        $this->canVoid($payment)->shouldReturn(true);
    }

    function it_can_capture_payments()
    {
        $this->canCapture()->shouldReturn(true);
    }

    function it_can_capture_partial()
    {
        $this->canCapturePartial()->shouldReturn(true);
    }

    function it_can_refund_payments()
    {
        $this->canRefund()->shouldReturn(true);
    }

    function it_can_refund_invoice_partial()
    {
        $this->canRefundPartialPerInvoice()->shouldReturn(true);
    }

    function it_can_be_used_in_a_multishipping_checkout()
    {
        $this->canUseForMultishipping()->shouldReturn(true);
    }

    function it_can_be_used_in_the_checkout()
    {
        $this->canUseCheckout()->shouldReturn(true);
    }

    function it_can_be_used_in_the_admin()
    {
        $this->canUseInternal()->shouldReturn(true);
    }

    function it_should_not_allow_to_save_a_credit_cart()
    {
        $this->canSaveCc()->shouldReturn(false);
    }

    function it_should_not_allow_recurring_profiles()
    {
        $this->canManageRecurringProfiles()->shouldReturn(false);
    }

    function it_should_not_allow_to_create_billing_agreements()
    {
        $this->canCreateBillingAgreement()->shouldReturn(false);
    }

    function it_cannot_fetch_the_transaction_information()
    {
        $this->canFetchTransactionInfo()->shouldReturn(false);
    }

    function it_cannot_review_a_payment(\Mage_Payment_Model_Info $payment)
    {
        $this->canReviewPayment($payment)->shouldReturn(false);
    }

    function it_should_have_a_form_block()
    {
        $this->getFormBlockType()->shouldReturn('demac_chase/payment_form');
    }

    function it_should_have_a_info_block()
    {
        $this->getInfoBlockType()->shouldReturn('demac_chase/payment_info');
    }

    function it_should_validate_a_credit_card_number()
    {

    }

    function it_should_authorize_a_payment(\Varien_Object $payment)
    {
        throw new PendingException('pending while the adapter is developed');

        $amount = 100; // Authorization amount for the order
        $this->authorize($payment, $amount)->shouldReturn($this);
    }

    function it_should_capture_a_payment(\Varien_Object $payment)
    {
        throw new PendingException('pending while the adapter is developed');

        $amount = 100; // Amount to capture
        $this->capture($payment, $amount)->shouldReturn($this);
    }

    function it_should_void_a_payment(\Varien_Object $payment)
    {
        throw new PendingException('pending while the adapter is developed');

        $this->void($payment)->shouldReturn($this);
    }

    function it_should_refund_a_payment(\Varien_Object $payment)
    {
        throw new PendingException('pending while the adapter is developed');

        $amount = 100; // Amount to refund for the order
        $this->refund($payment, $amount)->shouldReturn($this);
    }

    function it_should_cancel_a_payment(\Varien_Object $payment)
    {
        throw new PendingException('pending while the adapter is developed');

        $this->cancel($payment)->shouldReturn($this);
    }


}
