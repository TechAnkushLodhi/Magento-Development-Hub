# Icecube_Multifileuploader Extension

The **Icecube_Multifileuploader** extension provides a functionality for uploading multiple files in Magento. This extension allows administrators to configure the file types, size limits, and enables a seamless file upload interface on the product form in the Magento Admin Panel.

## Features

- Upload multiple files via Magento Admin Panel.
- Configure allowed file types (e.g., `.jpg`, `.png`, `.pdf`).
- Set a maximum file size limit for uploads (in MB).
- Integrates with product form galleries for easy management.

## Installation

### Step 1: Install the Extension

1. Download or clone the `Icecube_Multifileuploader` extension.
2. Place the extension directory into `app/code/Icecube/Multifileuploader`.
3. Run the following commands to install the extension:

   ```bash
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy -f
   php bin/magento cache:flush
