<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 9/13/16
 * Time: 14:04
 */

namespace Codealist\MobileIcons\Plugin\Framework\View\Page\Config;


class AddCustomFavicons
{
    public function __construct(
        \Codealist\MobileIcons\Helper\Data $mobileIconsHelper,
        \Magento\Framework\View\Page\Config $pageConfig
    )
    {
        $this->mobileIconsHelper = $mobileIconsHelper;
        $this->pageConfig = $pageConfig;
    }

    public function afterPrepareFavicon()
    {
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_57X57)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '57x57']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_60X60)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '60x60']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_72X72)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '72x72']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_76X76)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '76x76']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_114X114)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '114x114']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_120X120)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '120x120']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_144X144)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '144x144']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_152X152)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '152x152']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_APPLE_TOUCH_ICON_180X180)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'apple-touch-icon', 'sizes' => '180x180']],
                'apple-touch-icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_ANDROID_ICON_192X192)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '192x192']],
                'icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_GENERAL_ICON_16X16)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16']],
                'icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_GENERAL_ICON_32X32)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32']],
                'icon'
            );
        }
        if ($icon = $this->mobileIconsHelper->getIconUrl(\Codealist\MobileIcons\Helper\Data::XML_CONFIG_PATH_GENERAL_ICON_96X96)) {
            $this->pageConfig->addRemotePageAsset(
                $icon,
                \Magento\Framework\View\Page\Config\Generator\Head::VIRTUAL_CONTENT_TYPE_LINK,
                ['attributes' => ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96']],
                'icon'
            );
        }
    }
}