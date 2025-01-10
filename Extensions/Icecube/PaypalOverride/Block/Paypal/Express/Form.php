<?php
namespace Icecube\PaypalOverride\Block\Paypal\Express;

use Magento\Framework\View\Element\Template;
use Magento\Paypal\Block\Express\Form as PayPalForm;

class Form extends PayPalForm
{
    /**
     * Get initialized mark template
     *
     * @return Template
     */
    protected function _getMarkTemplate()
    {
        /** @var $mark Template */
        $mark = $this->_layout->createBlock(Template::class);
        $mark->setTemplate('Icecube_PaypalOverride::payment/mark.phtml');
        return $mark;
    }

    /**
     * Initializes redirect template and set mark
     *
     * @param Template $mark
     * @return void
     */
    protected function _initializeRedirectTemplateWithMark(Template $mark)
    {
        $this->setTemplate(
            'Icecube_PaypalOverride::payment/redirect.phtml'
        )->setRedirectMessage(
            __('You will be redirected to the PayPal website when you place an order.')
        )->setMethodTitle(
            // Output PayPal mark, omit title
            ''
        )->setMethodLabelAfterHtml(
            $mark->toHtml()
        );
    }

    /**
     * Get billing agreement code
     *
     * @return string|null
     */
    public function getBillingAgreementCode()
    {
        $customerId = $this->currentCustomer->getCustomerId();
        return $this->_paypalData->shouldAskToCreateBillingAgreement($this->_config, $customerId)
            ? Checkout::PAYMENT_INFO_TRANSPORT_BILLING_AGREEMENT
            : null;
    }
}
