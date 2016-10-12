<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 9/13/16
 * Time: 14:07
 */

namespace Codealist\MobileIcons\Helper;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_CONFIG_PATH_GENERAL_ICON_16X16 = 'codealist_mobileicons/general/favicon_16x16';
    const XML_CONFIG_PATH_GENERAL_ICON_32X32 = 'codealist_mobileicons/general/favicon_32x32';
    const XML_CONFIG_PATH_GENERAL_ICON_96X96 = 'codealist_mobileicons/general/favicon_96x96';

    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_57X57 = 'codealist_mobileicons/apple/apple_touch_icon_57x57';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_60X60 = 'codealist_mobileicons/apple/apple_touch_icon_60x60';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_72X72 = 'codealist_mobileicons/apple/apple_touch_icon_72x72';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_76X76 = 'codealist_mobileicons/apple/apple_touch_icon_76x76';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_114X114 = 'codealist_mobileicons/apple/apple_touch_icon_114x114';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_120X120 = 'codealist_mobileicons/apple/apple_touch_icon_120x120';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_144X144 = 'codealist_mobileicons/apple/apple_touch_icon_144x144';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_152X152 = 'codealist_mobileicons/apple/apple_touch_icon_152x152';
    const XML_CONFIG_PATH_APPLE_TOUCH_ICON_180X180 = 'codealist_mobileicons/apple/apple_touch_icon_180x180';

    const XML_CONFIG_PATH_ANDROID_ICON_192X192 = 'codealist_mobileicons/android/android_favicon_192x192';
    const XML_CONFIG_PATH_MS_APPLICATION_SQUARE_70X70 = 'codealist_mobileicons/general/meta_msapplication_square70x70';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getConfig($path)
    {
        return $this->scopeConfig->getValue($path);
    }

    public function getIconUrl($path)
    {
        $mediaUrl = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $icon = $this->getConfig($path);
        return $icon != '' ? ($mediaUrl . 'favicon/'. $icon) : null;
    }
}