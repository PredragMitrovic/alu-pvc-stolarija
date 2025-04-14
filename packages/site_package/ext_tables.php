<?php

defined('TYPO3') or die();

// Placeholder if needed for TCA or registration


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Teaser Box',
        'sitepackage_teaserbox',
        'EXT:site_package/Resources/Public/Icons/teaser.svg'
    ],
    'CType',
    'site_package'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Grid Container',
        'sitepackage_gridcontainer',
        'EXT:site_package/Resources/Public/Icons/grid.svg'
    ],
    'CType',
    'site_package'
);
