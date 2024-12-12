<?php

namespace Icecube\Multifileuploader\Controller\Adminhtml\Upload;

use Magento\Backend\App\Action;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Controller\Result\JsonFactory;
use Icecube\Multifileuploader\Model\MultifileUploaderFactory;
use Icecube\Multifileuploader\Helper\Data;

class Add extends Action
{
    protected $filesystem;
    protected $fileFactory;
    protected $resultJsonFactory;
    protected $_helperData;

    public function __construct(
        Action\Context $context,
        \Magento\Framework\Filesystem $filesystem,
        MultifileUploaderFactory $fileFactory,
        JsonFactory $resultJsonFactory,
        Data $_helperData,
    ) {
        parent::__construct($context);
        $this->filesystem = $filesystem;
        $this->fileFactory = $fileFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->_helperData = $_helperData;
    }

    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $resultJson */
        $resultJson = $this->resultJsonFactory->create();
        $result = ['status' => 'error', 'message' => __('Unable to save file.')];

        if ($this->getRequest()->isPost()) {
            try {
                $productId = $this->getRequest()->getParam('product_id');
                $inputLabel = $this->getRequest()->getParam('input_label'); // File label
                $fileNameCode = $this->getRequest()->getParam('file_name'); // File Name


                 
                if (!$productId || !$inputLabel || !$fileNameCode) {
                    throw new \Exception(__('Missing required parameters.'));
                }



                if (isset($_FILES['input_value']) && $_FILES['input_value']['error'] === UPLOAD_ERR_OK) {
                    $file = $_FILES['input_value'];
                    $fileName = $file['name'];
                    $tmpName = $file['tmp_name'];
                    $fileSize = $file['size']; // Get the file size in bytes
                    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); // Get file extension

                    // Fetch allowed file types and max file size from helper
                    $allowedFileTypes = $this->_helperData->getAllowedFileTypes(); // Expected: ['jpg', 'png', 'pdf']
                    $allowedFileTypes = explode(',', $allowedFileTypes); // Convert the string to an array
                    $maxFileSize = $this->_helperData->getMaxFileSize(); // Expected: 5 (in MB)
                     // Convert max file size to bytes
                    $maxFileSizeBytes = $maxFileSize * 1024 * 1024;

                    // Validation for file type
                    if (!in_array($fileExtension, $allowedFileTypes)) {
                        throw new \Exception("Invalid file type. Only " . implode(", ", $allowedFileTypes) . " files are allowed.");
                    }

                    // Validation for file size
                    if ($fileSize > $maxFileSizeBytes) {
                        throw new \Exception("File size exceeds the maximum allowed size of $maxFileSize MB.");
                    }


                    // Define media directory and create target directory
                    $mediaDir = $this->filesystem->getDirectoryWrite(DirectoryList::MEDIA);
                    $targetDir = $mediaDir->getAbsolutePath("multifileuploader/$productId/$fileNameCode/");
                    if (!is_dir($targetDir)) {
                        mkdir($targetDir, 0777, true);
                    }

                    // Create a unique file name to avoid overwriting
                    $uniqueFileName = uniqid('', true) . '_' . $fileName;
                    $targetFile = $targetDir . $uniqueFileName;
                    move_uploaded_file($tmpName, $targetFile);

                    $relativePath =  'media/' .ltrim(str_replace($mediaDir->getAbsolutePath(),'',$targetFile), '/');
                     
                    $fileModel = $this->fileFactory->create();
                    $fileModel->setData([
                        'product_id' => $productId,
                        'file_label' => $inputLabel,
                        'file_value' => $relativePath,
                        'file_name' => $fileNameCode,
                    ]);
                    $fileModel->save();

                    $result = [
                        'status' => 'success',
                        'message' => __("File <strong> %1 </strong> added successfully.", $fileModel->getFileLabel()),
                        'updatedData' => [
                            'id' => $fileModel->getId(),
                            'product_id' => $fileModel->getProductId(),
                            'file_label' => $fileModel->getFileLabel(),
                            'file_value' => $fileModel->getFileValue(),
                            'file_name' => $fileModel->getFileName(),
                        ],
                    ];
                } else {
                    throw new \Exception(__('File upload failed:<strong> %1 </strong>', $this->getUploadErrorMessage($_FILES['input_value']['error'])));
                }
            } catch (\Exception $e) {
                $result['message'] = __('Error: %1', $e->getMessage());
            }
        }

        return $resultJson->setData($result);
    }

    private function getUploadErrorMessage($errorCode)
    {
        $errors = [
            UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
            UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive specified in the HTML form.',
            UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded.',
            UPLOAD_ERR_NO_FILE => 'No file was uploaded.',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
            UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
        ];
        return $errors[$errorCode] ?? 'Unknown upload error.';
    }
}
