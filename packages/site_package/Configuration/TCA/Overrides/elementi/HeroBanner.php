<?php
// site_package/Configuration/TCA/Overrides/tt_content_hero_banner.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Hero Banner',
        'hero_banner',
        'content-text'
    ]
);

// Configure the fields
$heroFields = [
    'subheader' => [
        'exclude' => true,
        'label' => 'Podnaslov (H3)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'is_inner_page' => [
        'exclude' => true,
        'label' => 'Unutrašnja stranica',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ],
    ],
    'image_2' => [
        'exclude' => true,
        'label' => 'Slika 2',
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
    'image_3' => [
        'exclude' => true,
        'label' => 'Slika 3',
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
    'image_4' => [
        'exclude' => true,
        'label' => 'Slika 4',
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
    'background_image' => [
        'exclude' => true,
        'label' => 'Pozadinska slika',
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
    'quote_text' => [
        'exclude' => true,
        'label' => 'Tekst ispod slika',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'quote_number' => [
        'exclude' => true,
        'label' => 'Broj zadovoljnih klijenata',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $heroFields);

// Create a new palette for our custom fields
$GLOBALS['TCA']['tt_content']['types']['hero_banner'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            is_inner_page,
            --palette--;;headers,
            bodytext;Opis,
        --div--;Slike,
            image;Slika 1,
            image_2,
            image_3,
            image_4,
            background_image,
        --div--;Statistika,
            quote_text,
            quote_number,
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