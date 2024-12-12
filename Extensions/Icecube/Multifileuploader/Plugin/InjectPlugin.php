<?php
namespace Icecube\Multifileuploader\Plugin;

use Magento\Framework\View\Element\AbstractBlock;
use Icecube\Multifileuploader\Helper\Data;

class InjectPlugin
{
    /**
     * @var Data
     */
    protected $helperData;

    /**
     * Constructor
     * 
     * @param Data $helperData
     */
    public function __construct(Data $helperData)
    {
        $this->helperData = $helperData;
    }

    /**
     * Around plugin for AbstractBlock::setTemplate
     *
     * @param AbstractBlock $subject
     * @param \Closure $proceed
     * @param string $template
     * @return AbstractBlock
     */
    public function aroundSetTemplate(AbstractBlock $subject, \Closure $proceed, $template)
    {
        // Check if the block is `product.attributes` and the module is enabled
        if ($subject->getNameInLayout() === 'product.attributes' && $this->helperData->isEnabled()) {
            $template = 'Icecube_Multifileuploader::product/view/attributes.phtml';
        }

        // Proceed with the original method
        return $proceed($template);
    }
}
