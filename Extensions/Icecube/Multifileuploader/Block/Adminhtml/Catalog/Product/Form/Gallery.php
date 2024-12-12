<?php
namespace Icecube\Multifileuploader\Block\Adminhtml\Catalog\Product\Form;

use Magento\Framework\Registry;
use Magento\Backend\Block\Template;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Backend\Block\Template\Context;

class Gallery extends Template
{
    /**
     * @var Registry
     */
    private $registry;

    /**
     * @var StoreManager
     */
    protected $storeManager;

    /**
     * Constructor.
     *
     * @param Registry $registry
     * @param \Magento\Backend\Block\Template\Context $context
     * @param StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        Registry $registry,
        Context $context,
        StoreManagerInterface $storeManager,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->storeManager = $storeManager;
        parent::__construct($context, $data);


         // Add CSS  file to the page
        $this->pageConfig->addPageAsset('Icecube_Multifileuploader::css/file.css');
    }

    /**
     * Block template.
     *
     * @var string
     */
    protected $_template = 'group/gallery.phtml';

    /**
     * Get the uploader action URL.
     *
     * @return string
     */
    public function getUploaderActionUrl()
    {
        return $this->getUrl('multifileuploader/upload/add');
    }
     /**
     * Get the uploader action URL.
     *
     * @return string
     */
    public function getDeleteGetActionUrl()
    {
        return $this->getUrl('multifileuploader/deleteget/file');
    }

    /**
     * Get the current product ID.
     *
     * @return int|null
     */
    public function getCurrentProductId()
    {
        $product = $this->registry->registry('current_product');
        return $product ? $product->getId() : null;
    }

    public function getBaseUrl()
    {
        return $this->storeManager->getStore()->getBaseUrl();
    }


    /**
     * Get store ID.
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeManager->getStore()->getId();
    }
}
