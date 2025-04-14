<?php
// site_package/Configuration/TCA/Overrides/tt_content_about_us.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'About Us',
        'about_us',
        'content-text'
    ]
);

// Configure the fields
$aboutUsFields = [
    'about_title' => [
        'exclude' => true,
        'label' => 'About Subtitle (H3)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'about_heading' => [
        'exclude' => true,
        'label' => 'About Heading (H2)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'about_image' => [
        'exclude' => true,
        'label' => 'Main About Image',
        'config' => [
            'type' => 'file',
            'allowed' => 'common-image-types',
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
            ],
            'overrideChildTca' => [
                'types' => [
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '--palette--;;imageoverlayPalette, --palette--;;filePalette'
                    ],
                ],
            ],
            'maxitems' => 1
        ],
    ],
    'customer_percentage' => [
        'exclude' => true,
        'label' => 'Happy Customer Percentage',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int'
        ],
    ],
    'mission_title' => [
        'exclude' => true,
        'label' => 'Mission Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'mission_text' => [
        'exclude' => true,
        'label' => 'Mission Text',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'mission_icon' => [
        'exclude' => true,
        'label' => 'Mission Icon',
        'config' => [
            'type' => 'file',
            'allowed' => 'common-image-types',
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
            ],
            'overrideChildTca' => [
                'types' => [
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '--palette--;;imageoverlayPalette, --palette--;;filePalette'
                    ],
                ],
            ],
            'maxitems' => 1
        ],
    ],
    'vision_title' => [
        'exclude' => true,
        'label' => 'Vision Title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'vision_text' => [
        'exclude' => true,
        'label' => 'Vision Text',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'vision_icon' => [
        'exclude' => true,
        'label' => 'Vision Icon',
        'config' => [
            'type' => 'file',
            'allowed' => 'common-image-types',
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
            ],
            'overrideChildTca' => [
                'types' => [
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '--palette--;;imageoverlayPalette, --palette--;;filePalette'
                    ],
                ],
            ],
            'maxitems' => 1
        ],
    ],
    'read_more_link' => [
        'exclude' => true,
        'label' => 'Read More Link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_text_1' => [
        'exclude' => true,
        'label' => 'Facility Text 1',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_text_2' => [
        'exclude' => true,
        'label' => 'Facility Text 2',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_text_3' => [
        'exclude' => true,
        'label' => 'Facility Text 3',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_text_4' => [
        'exclude' => true,
        'label' => 'Facility Text 4',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_text_5' => [
        'exclude' => true,
        'label' => 'Facility Text 5',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_text_6' => [
        'exclude' => true,
        'label' => 'Facility Text 6',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $aboutUsFields);

// Create a new palette for our custom fields
$GLOBALS['TCA']['tt_content']['types']['about_us'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            about_title,
            about_heading,
            bodytext;Description,
        --div--;About Content,
            about_image,
            customer_percentage,
            mission_title,
            mission_text,
            vision_title,
            vision_text,
            read_more_link,
        --div--;Facilities,
            facility_text_1,
            facility_text_2,
            facility_text_3,
            facility_text_4,
            facility_text_5,
            facility_text_6,
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
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
    ]
];