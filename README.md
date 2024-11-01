# Aakhan CheckoutValidations for Magento 2

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)

**Aakhan CheckoutValidations** is a Magento 2 extension that enforces custom validation rules for the `telephone` and `postcode` fields on the checkout page. This extension ensures these fields are filled out with US-specific validation for phone numbers and postal codes.

---

## Features

- **Mandatory Field Validation**: Ensures `telephone` and `postcode` fields in billing and shipping steps are mandatory.
- **US Format Validation**: Applies US-specific validation for phone numbers and postal codes.
- **Easy Integration**: Automatically integrates validations into the Magento 2 checkout process.

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/khanareeb17/CheckoutValidations.git
   ```
## Download

To download this extension:

1. Visit the [GitHub repository](https://github.com/khanareeb17/CheckoutValidations).
2. Click on the "Code" button.
3. Select **Download ZIP** to download the extension files.
4. Extract the downloaded ZIP file.

## Installation

After downloading and extracting, follow these steps to install:

1. **Move files**:
   Place the `Aakhan/CheckoutValidations` directory in `app/code/Aakhan/CheckoutValidations` in your Magento 2 installation.

2. **Enable the module**:
   ```bash
   php bin/magento module:enable Aakhan_CheckoutValidations
   rm -rf generated/* var/cache/* var/page_cache/* var/view_preprocessed/* pub/static/*
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy
   php bin/magento cache:flush
   ```


