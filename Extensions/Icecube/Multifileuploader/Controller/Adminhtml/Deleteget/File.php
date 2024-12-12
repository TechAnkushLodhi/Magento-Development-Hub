<?php

namespace Icecube\Multifileuploader\Controller\Adminhtml\Deleteget;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\JsonFactory;
use Icecube\Multifileuploader\Model\MultifileUploaderFactory;
use Icecube\Multifileuploader\Model\ResourceModel\MultifileUploader\CollectionFactory;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Driver\File as Filedriver;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\View\Asset\Repository;


class File extends Action
{
    protected $multifileUploaderFactory;
    protected $collectionFactory;
    protected $resultJsonFactory;
    protected $filesystem;
    protected $_file;
    protected $_storeManager;
    protected $assetRepo;


    /**
     * Constructor to initialize dependencies.
     *
     * @param Action\Context $context
     * @param MultifileUploaderFactory $multifileUploaderFactory
     * @param CollectionFactory $collectionFactory
     * @param JsonFactory $resultJsonFactory
     * @param Filesystem $filesystem
     * @param Filedriver $file
     */
    public function __construct(
        Action\Context $context,
        MultifileUploaderFactory $multifileUploaderFactory,
        CollectionFactory $collectionFactory,
        JsonFactory $resultJsonFactory,
        Filesystem $filesystem,
        Filedriver $file,
        Repository $assetRepo,
        StoreManagerInterface $storeManager
    ) {
        parent::__construct($context);
        $this->multifileUploaderFactory = $multifileUploaderFactory;
        $this->collectionFactory = $collectionFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->filesystem = $filesystem;
        $this->_file = $file;
        $this->assetRepo = $assetRepo;
        $this->_storeManager=$storeManager;
    }

    /**
     * Main execute method that handles the request and returns a JSON response.
     *
     * @return \Magento\Framework\Controller\Result\Json
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $resultJson */
        $resultJson = $this->resultJsonFactory->create();

        $result = ['status' => 'error', 'data' => 'Invalid request.'];

        if ($this->getRequest()->isPost()) {
            try {
                // Retrieve request parameters
                $productId = $this->getRequest()->getParam('product_id');
                $storeId = $this->getRequest()->getParam('store_id');
                $deleteId = $this->getRequest()->getParam('delete_id');

                // If `delete_id` is provided, delete the file; otherwise, fetch data
                $response = $deleteId ? $this->deleteFile($productId, $deleteId) : $this->getData($productId);
                $result = ['status' => 'success', 'data' => $response];
            } catch (\Exception $e) {
                // Capture any exceptions and return the error message
                $result['data'] = $e->getMessage();
            }
        }

        return $resultJson->setData($result);
    }

    /**
     * Retrieve data based on the provided product ID.
     *
     * @param int $productId
     * @return array
     * @throws \InvalidArgumentException if the product ID is not provided
     * @throws \Magento\Framework\Exception\LocalizedException if no data is found
     */
    protected function getData($productId)
    {
        if (!$productId) {
            throw new \InvalidArgumentException(__('Product ID is required.'));
        }

        $collection = $this->collectionFactory->create()
            ->addFieldToFilter('product_id', $productId);


         if ($collection->getSize() === 0) { // Check if the collection is empty
            throw new \Magento\Framework\Exception\LocalizedException(__('No data found for Product <strong>ID: %1</strong>', $productId));
        }

         // Build HTML output
        $html = '';
        $fileGroups = []; // Array to store items grouped by file type

        // Group items by file name
        foreach ($collection as $item) {
            $fileName = $item['file_name'];
            if (!isset($fileGroups[$fileName])) {
                $fileGroups[$fileName] = [];
            }
            $fileGroups[$fileName][] = $item;
        }

        // Ensure "SDS_FILE" appears first in the iteration
        uksort($fileGroups, function ($a, $b) {
            if ($a === 'SDS_FILE') {
                return -1; // "SDS_FILE" should come before others
            }
            if ($b === 'SDS_FILE') {
                return 1; // "SDS_FILE" should come before others
            }
            return 0; // Maintain original order for other keys
        });

        // Generate HTML
        foreach ($fileGroups as $fileName => $items) {
            $groupCount = count($items); // Count the number of items in the group

            // Check if the file name is 'SDS_FILE' and adjust the heading accordingly
            if ($fileName === 'SDS_FILE') {
                $heading = $groupCount > 1 ? 'SDS FILES' : 'SDS FILE';
            } elseif ($fileName === 'TDS_FILE') {
                $heading = $groupCount > 1 ? 'TDS FILES' : 'TDS FILE';
            } else {
                $heading = htmlspecialchars($fileName) . ' FILES';
            }
            $html .= '<h2 class="file-group-heading">' . $heading . '</h2>'; // Add a heading for each group

            foreach ($items as $item) {
                $html .= '<div class="file-section">';
                $html .= '<h3 class="File-heading">' . htmlspecialchars($item['file_label']) . '</h3>';
                $html .= '<h3 class="File-heading">' . htmlspecialchars($item['file_name']) . '</h3>';
                $html .= '<div class="File-icon">';
                $html .= '<a target="_blank" href="' . htmlspecialchars($this->_storeManager->getStore()->getBaseUrl() . $item['file_value']) . '">';
                $html .= '<img class="multipdf-image" src="' . htmlspecialchars($this->assetRepo->getUrl('Icecube_Multifileuploader/images/pdf.png')) . '" alt="' . htmlspecialchars($item['file_label']) . '" />';
                $html .= '</a>';
                $html .= '</div>';
                $html .= '<span class="delete-file" data-id="' . htmlspecialchars($item['id']) . '" data-label="' . htmlspecialchars($item['file_label']) . '">';
                $html .= '<img class="delete-image" src="' . htmlspecialchars($this->assetRepo->getUrl('Icecube_Multifileuploader/images/delete.png')) . '" alt="' . htmlspecialchars($item['file_label']) . '" />';
                $html .= '</span>';
                $html .= '</div>';
            }
        }

        return $html;
    }

    /**
     * Delete a specific record based on delete_id and product_id.
     *
     * @param int $productId
     * @param int $deleteId
     * @return string
     * @throws \InvalidArgumentException if product ID or delete ID is not provided
     * @throws \Magento\Framework\Exception\LocalizedException if no record is found or if file deletion fails
     */
    protected function deleteFile($productId, $deleteId)
    {
        if (!$deleteId || !$productId) {
            throw new \InvalidArgumentException(__('Both Product ID and Delete ID are required.'));
        }


        $collection = $this->collectionFactory->create()
            ->addFieldToFilter('id', $deleteId)
            ->addFieldToFilter('product_id', $productId);

        $item = $collection->getFirstItem();
        if ($item && $item->getId()) {
            // Get the file path from the file_value field
            $filePath = $item->getFileValue();
            $fileLabel = $item->getFileLabel();

            if ($filePath) {
                // Check if the file exists before attempting to delete it
                if ($this->_file->isExists($filePath)) {
                    try {
                        $this->_file->deleteFile($filePath);
                    } catch (\Exception $e) {
                        throw new \Magento\Framework\Exception\LocalizedException(__('An error occurred while deleting the <strong>file: %1</strong>', $filePath));
                    }
                } else {
                    throw new \Magento\Framework\Exception\LocalizedException(__('The file  <strong>"%1"</strong> does not exist and cannot be deleted.', $filePath));
                }
            }

            // Delete the record from the database
            $item->delete();
           return __('The associated file <strong>"%1"</strong> has been deleted successfully.', $fileLabel);


        }

        throw new \Magento\Framework\Exception\LocalizedException(__('No record found to delete with <strong>ID: %1</strong>', $deleteId));
    }
}
