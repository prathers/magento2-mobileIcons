# Custom Mobile Icons for Magento 2.x

This extension makes you able to add all the Apple Icons, MS Icons and Android icons directly from the backend.

### Requirements

The package works with Magento 2.0.x and 2.1.x.


### Installation

1. Copy the whole "Codealist" directory into your /project-directory/app/code/
2. From the terminal run: php bin/magento module:enable Codealist_Core Codealist_MobileIcons
3. php bin/magento setup:upgrade
4. php bin/magento cache:clean

The you should be able to go to Backend > Stores > Configuration > Codealist > Mobile Icons
