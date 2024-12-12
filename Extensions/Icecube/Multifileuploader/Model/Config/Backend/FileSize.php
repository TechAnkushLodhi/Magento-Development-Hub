<?php
namespace Icecube\Multifileuploader\Model\Config\Backend;

use Magento\Framework\App\Config\Value;

class FileSize extends Value
{
    public function beforeSave()
    {
        $value = $this->getValue();
        if (!is_numeric($value) || $value <= 0) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Max file size must be a positive number.')
            );
        }
        return parent::beforeSave();
    }
}
?>