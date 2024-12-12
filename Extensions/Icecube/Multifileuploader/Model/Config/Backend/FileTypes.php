<?php
namespace Icecube\Multifileuploader\Model\Config\Backend;

use Magento\Framework\App\Config\Value;

class FileTypes extends Value
{
    public function beforeSave()
    {
        $value = $this->getValue();
        if (!preg_match('/^([a-z]+,?)+$/', $value)) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Invalid file types format. Use comma-separated values like "jpg,png,pdf".')
            );
        }
        return parent::beforeSave();
    }
}

?>