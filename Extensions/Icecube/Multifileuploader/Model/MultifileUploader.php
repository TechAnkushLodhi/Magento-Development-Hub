<?php

namespace Icecube\Multifileuploader\Model;

use Magento\Framework\Model\AbstractModel;

class MultifileUploader extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Icecube\Multifileuploader\Model\ResourceModel\MultifileUploader::class);
    }
}
