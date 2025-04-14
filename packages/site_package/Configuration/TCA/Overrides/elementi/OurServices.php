<?php
// site_package/Configuration/TCA/Overrides/elementi/OurServices.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Our Services',
        'our_services',
        'content-text'
    ]
);

// Configure the fields
$ourServicesFields = [
    'service_subtitle' => [
        'exclude' => true,
        'label' => 'Service Subtitle (H3)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_heading' => [
        'exclude' => true,
        'label' => 'Service Heading (H2)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_description' => [
        'exclude' => true,
        'label' => 'Service Description',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    'service_title_1' => [
        'exclude' => true,
        'label' => 'Service 1 Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_text_1' => [
        'exclude' => true,
        'label' => 'Service 1 Description',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_title_2' => [
        'exclude' => true,
        'label' => 'Service 2 Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_text_2' => [
        'exclude' => true,
        'label' => 'Service 2 Description',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_title_3' => [
        'exclude' => true,
        'label' => 'Service 3 Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_text_3' => [
        'exclude' => true,
        'label' => 'Service 3 Description',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_title_4' => [
        'exclude' => true,
        'label' => 'Service 4 Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_text_4' => [
        'exclude' => true,
        'label' => 'Service 4 Description',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_title_5' => [
        'exclude' => true,
        'label' => 'Service 5 Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_text_5' => [
        'exclude' => true,
        'label' => 'Service 5 Description',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_title_6' => [
        'exclude' => true,
        'label' => 'Service 6 Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'service_text_6' => [
        'exclude' => true,
        'label' => 'Service 6 Description',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $ourServicesFields);

// Create a new palette for our custom fields
$GLOBALS['TCA']['tt_content']['types']['our_services'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            service_subtitle,
            service_heading,
            service_description,
        --div--;Left Services,
            service_title_1,
            service_text_1,
            service_title_2,
            service_text_2,
            service_title_3,
            service_text_3,
        --div--;Right Services,
            service_title_4,
            service_text_4,
            service_title_5,
            service_text_5,
            service_title_6,
            service_text_6,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
];