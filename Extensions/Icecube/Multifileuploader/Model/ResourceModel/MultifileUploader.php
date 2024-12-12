<?php

namespace Icecube\Multifileuploader\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MultifileUploader extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('icecube_multifileuploader', 'id'); // Table name and Primary Key
    }
}
