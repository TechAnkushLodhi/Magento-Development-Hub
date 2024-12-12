<?php
namespace Icecube\Multifileuploader\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\Registry;
use Icecube\Multifileuploader\Model\ResourceModel\MultifileUploader\CollectionFactory;
use Icecube\Multifileuploader\Helper\Data;

class Multifile extends Template
{
     /**
     * @var Data
     */
    private $_helperdata;

     /**
     * @var Registry
     */
    private $registry;

    protected $collectionFactory;
     protected $_logger;

    public function __construct(
      Context $context,
      Registry $registry,
      CollectionFactory $collectionFactory,
     \Psr\Log\LoggerInterface $logger,
      Data $_helperdata,
     array $data = []
    ) {
        parent::__construct($context, $data);
        $this->registry = $registry;
        $this->collectionFactory = $collectionFactory;
        $this->_logger = $logger;
        $this->_helperdata = $_helperdata;


    }
    
    public function getSdsfileData()
    {   
        $collection = $this->collectionFactory->create()
            ->addFieldToFilter('product_id', $this->getCurrentProductId())
            ->addFieldToFilter('file_name', 'SDS_FILE');
            return $collection;
    }
     public function getTdsfileData()
    {   
        $collection = $this->collectionFactory->create()
            ->addFieldToFilter('product_id', $this->getCurrentProductId())
            ->addFieldToFilter('file_name', 'TDS_FILE');
            return $collection;
    }
     public function getCurrentProductId()
    {
        $this->_logger->info('debug1234'); 
        $product = $this->registry->registry('current_product');
        return $product ? $product->getId() : null;
    }
    public function IsExtensionEnable(){
       return  $this->_helperdata->isEnabled();
    }

}
