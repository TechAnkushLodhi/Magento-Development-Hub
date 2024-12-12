<?php

namespace Icecube\Multifileuploader\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_MULTIFILE = 'multifile_section/';

    /**
     * Get configuration value by path
     *
     * @param string $field
     * @param int|null $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_MULTIFILE . $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Check if the extension is enabled
     *
     * @param int|null $storeId
     * @return bool
     */
    public function isEnabled($storeId = null)
    {
        return $this->getConfigValue('general/enable', $storeId) == 1;
    }

    /**
     * Get allowed file types
     *
     * @param int|null $storeId
     * @return string
     */
    public function getAllowedFileTypes($storeId = null)
    {
        return $this->getConfigValue('configuration/allowed_file_types', $storeId);
    }

    /**
     * Get max file size
     *
     * @param int|null $storeId
     * @return int
     */
    public function getMaxFileSize($storeId = null)
    {
        return (int)$this->getConfigValue('configuration/max_file_size', $storeId);
    }
}
