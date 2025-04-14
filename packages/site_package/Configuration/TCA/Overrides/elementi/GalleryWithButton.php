<?php
// site_package/Configuration/TCA/Overrides/elementi/Gallery.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Gallery with Button',
        'gallery_with_button',
        'content-image'
    ]
);

// Configure the fields
$galleryFields = [
    'gallery_with_Button_subtitle' => [
        'exclude' => true,
        'label' => 'Service Subtitle (H3)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'gallery_with_Button_heading' => [
        'exclude' => true,
        'label' => 'Service Heading (H2)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'gallery_with_Button_description' => [
        'exclude' => true,
        'label' => 'Service Description',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    'gallery_images' => [
        'exclude' => true,
        'label' => 'Gallery Images',
        'config' => [
            'type' => 'file',
            'allowed' => 'common-image-types',
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true
            ],
            'overrideChildTca' => [
                'types' => [
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '
                            --palette--;;imageoverlayPalette,
                            --palette--;;filePalette'
                    ]
                ],
                'columns' => [
                    'crop' => [
                        'config' => [
                            'cropVariants' => [
                                'default' => [
                                    'title' => 'Default',
                                    'allowedAspectRatios' => [
                                        'NaN' => [
                                            'title' => 'Free',
                                            'value' => 0.0
                                        ],
                                        '1:1' => [
                                            'title' => '1:1',
                                            'value' => 1.0
                                        ]
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'maxitems' => 200
        ],
    ],
    'cursor_text' => [
        'exclude' => true,
        'label' => 'Cursor Text',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => 'View'
        ],
    ],
    'btn_text' => [
        'exclude' => true,
        'label' => 'Button Text',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => 'view gallery'
        ],
    ],
    'btn_link' => [
        'exclude' => true,
        'label' => 'Button Link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'softref' => 'typolink'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $galleryFields);

// Create a new palette for our custom fields
$GLOBALS['TCA']['tt_content']['types']['gallery_with_button'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            gallery_with_Button_subtitle,
            gallery_with_Button_heading,
            gallery_with_Button_description,
        --div--;Gallery,
            gallery_images,
            cursor_text,
        --div--;Button,
            btn_text,
            btn_link,
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