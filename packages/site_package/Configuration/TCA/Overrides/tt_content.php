<?php

defined('TYPO3') or die();

call_user_func(function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
        'tx_sitepackage_teasertitle' => [
            'label' => 'Teaser Title',
            'config' => [
                'type' => 'input',
                'size' => 50,
            ],
        ],
        'tx_sitepackage_teasertext' => [
            'label' => 'Teaser Text',
            'config' => [
                'type' => 'text',
                'rows' => 5,
                'cols' => 40,
            ],
        ],
        'tx_sitepackage_teaserimage' => [
            'label' => 'Teaser Image',
            'config' => [
                'type' => 'file',
                'appearance' => [
                    'createNewRelationLinkTitle' => 'Add Image',
                ],
                'maxitems' => 1,
                'allowed' => 'common-image-types',
            ],
        ],
    ]);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'tx_sitepackage_teasertitle, tx_sitepackage_teasertext, tx_sitepackage_teaserimage',
        '',
        'after:bodytext'
    );
});

call_user_func(function () {
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['news_pi1'] = 'templateLayout';
});


// Osnovne postavke za tt_content

// Uključi sve module iz direktorijuma 'elementi'
$elementDirectory = __DIR__ . '/elementi/';
$elementFiles = glob($elementDirectory . '*.php');
foreach ($elementFiles as $elementFile) {
    require_once($elementFile);
}