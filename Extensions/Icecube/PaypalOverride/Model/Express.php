<?php
namespace Icecube\PaypalOverride\Model;

use Magento\Paypal\Model\Express as BaseExpress;

class Express extends BaseExpress
{
     /**
     * Availability option
     *
     * @var bool
     */
    protected $_canUseInternal = true;
}
