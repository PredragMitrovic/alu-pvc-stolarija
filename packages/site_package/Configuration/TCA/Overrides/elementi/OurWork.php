<?php
// site_package/Configuration/TCA/Overrides/elementi/OurWork.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Our Work',
        'our_work',
        'content-text'
    ]
);

// Configure the fields
$ourWorkFields = [
    'work_subtitle' => [
        'exclude' => true,
        'label' => 'Subtitle (H3)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_heading' => [
        'exclude' => true,
        'label' => 'Heading (H2)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_description' => [
        'exclude' => true,
        'label' => 'Description',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'work_image_1' => [
        'exclude' => true,
        'label' => 'Work Image 1',
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
    'work_image_2' => [
        'exclude' => true,
        'label' => 'Work Image 2',
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
    'work_list_item_1' => [
        'exclude' => true,
        'label' => 'Work List Item 1',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_list_item_2' => [
        'exclude' => true,
        'label' => 'Work List Item 2',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_list_item_3' => [
        'exclude' => true,
        'label' => 'Work List Item 3',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_list_item_4' => [
        'exclude' => true,
        'label' => 'Work List Item 4',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_learn_more_link' => [
        'exclude' => true,
        'label' => 'Learn More Link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_counter_percentage' => [
        'exclude' => true,
        'label' => 'Success Percentage',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int'
        ],
    ],
    'work_counter_percentage_text' => [
        'exclude' => true,
        'label' => 'Success Percentage Text',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_counter_solutions' => [
        'exclude' => true,
        'label' => 'Solutions Delivered Number',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int'
        ],
    ],
    'work_counter_solutions_text' => [
        'exclude' => true,
        'label' => 'Solutions Delivered Text',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'work_counter_years' => [
        'exclude' => true,
        'label' => 'Years of Experience',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int'
        ],
    ],
    'work_counter_years_text' => [
        'exclude' => true,
        'label' => 'Years of Experience Text',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_title_1' => [
        'exclude' => true,
        'label' => 'Facility Title 1',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_description_1' => [
        'exclude' => true,
        'label' => 'Facility Description 1',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_title_2' => [
        'exclude' => true,
        'label' => 'Facility Title 2',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_description_2' => [
        'exclude' => true,
        'label' => 'Facility Description 2',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_title_3' => [
        'exclude' => true,
        'label' => 'Facility Title 3',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_description_3' => [
        'exclude' => true,
        'label' => 'Facility Description 3',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_title_4' => [
        'exclude' => true,
        'label' => 'Facility Title 4',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'facility_description_4' => [
        'exclude' => true,
        'label' => 'Facility Description 4',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $ourWorkFields);

// Create a new palette for our custom fields
$GLOBALS['TCA']['tt_content']['types']['our_work'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            work_subtitle,
            work_heading,
            work_description,
        --div--;Images,
            work_image_1,
            work_image_2,
        --div--;Work List,
            work_list_item_1,
            work_list_item_2,
            work_list_item_3,
            work_list_item_4,
            work_learn_more_link,
        --div--;Counters,
            work_counter_percentage,
            work_counter_percentage_text,
            work_counter_solutions,
            work_counter_solutions_text,
            work_counter_years,
            work_counter_years_text,
        --div--;Facilities,
            facility_title_1,
            facility_description_1,
            facility_title_2,
            facility_description_2,
            facility_title_3,
            facility_description_3,
            facility_title_4,
            facility_description_4,
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