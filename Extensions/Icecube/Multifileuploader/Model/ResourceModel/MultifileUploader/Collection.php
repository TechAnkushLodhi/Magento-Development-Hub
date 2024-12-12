<?php

namespace Icecube\Multifileuploader\Model\ResourceModel\MultifileUploader;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Icecube\Multifileuploader\Model\MultifileUploader::class,
            \Icecube\Multifileuploader\Model\ResourceModel\MultifileUploader::class
        );
    }
}
