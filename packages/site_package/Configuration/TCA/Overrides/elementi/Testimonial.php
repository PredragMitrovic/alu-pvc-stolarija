<?php
// site_package/Configuration/TCA/Overrides/elementi/Testimonials.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Testimonials',
        'testimonials',
        'content-text'
    ]
);

// Configure the fields
$testimonialFields = [
    'section_subtitle' => [
        'exclude' => true,
        'label' => 'Section Subtitle (H3)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'section_title' => [
        'exclude' => true,
        'label' => 'Section Title (H2)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'section_description' => [
        'exclude' => true,
        'label' => 'Section Description',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    // Testimonial 1
    'testimonial1_text' => [
        'exclude' => true,
        'label' => 'Testimonial 1: Text',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    'testimonial1_author' => [
        'exclude' => true,
        'label' => 'Testimonial 1: Author Name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

    'testimonial1_rating' => [
        'exclude' => true,
        'label' => 'Testimonial 1: Rating (1-5)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['1 Star', '1'],
                ['2 Stars', '2'],
                ['3 Stars', '3'],
                ['4 Stars', '4'],
                ['5 Stars', '5'],
            ],
            'default' => '5',
        ],
    ],

    // Testimonial 2
    'testimonial2_text' => [
        'exclude' => true,
        'label' => 'Testimonial 2: Text',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    'testimonial2_author' => [
        'exclude' => true,
        'label' => 'Testimonial 2: Author Name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

    'testimonial2_rating' => [
        'exclude' => true,
        'label' => 'Testimonial 2: Rating (1-5)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['1 Star', '1'],
                ['2 Stars', '2'],
                ['3 Stars', '3'],
                ['4 Stars', '4'],
                ['5 Stars', '5'],
            ],
            'default' => '5',
        ],
    ],

    // Testimonial 3
    'testimonial3_text' => [
        'exclude' => true,
        'label' => 'Testimonial 3: Text',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    'testimonial3_author' => [
        'exclude' => true,
        'label' => 'Testimonial 3: Author Name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

    'testimonial3_rating' => [
        'exclude' => true,
        'label' => 'Testimonial 3: Rating (1-5)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['1 Star', '1'],
                ['2 Stars', '2'],
                ['3 Stars', '3'],
                ['4 Stars', '4'],
                ['5 Stars', '5'],
            ],
            'default' => '5',
        ],
    ],

    // Testimonial 4
    'testimonial4_text' => [
        'exclude' => true,
        'label' => 'Testimonial 4: Text',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    'testimonial4_author' => [
        'exclude' => true,
        'label' => 'Testimonial 4: Author Name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

    'testimonial4_rating' => [
        'exclude' => true,
        'label' => 'Testimonial 4: Rating (1-5)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['1 Star', '1'],
                ['2 Stars', '2'],
                ['3 Stars', '3'],
                ['4 Stars', '4'],
                ['5 Stars', '5'],
            ],
            'default' => '5',
        ],
    ],

    // Testimonial 5
    'testimonial5_text' => [
        'exclude' => true,
        'label' => 'Testimonial 5: Text',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim'
        ],
    ],
    'testimonial5_author' => [
        'exclude' => true,
        'label' => 'Testimonial 5: Author Name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

    'testimonial5_rating' => [
        'exclude' => true,
        'label' => 'Testimonial 5: Rating (1-5)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['1 Star', '1'],
                ['2 Stars', '2'],
                ['3 Stars', '3'],
                ['4 Stars', '4'],
                ['5 Stars', '5'],
            ],
            'default' => '5',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $testimonialFields);

// Define the showitem configuration
$GLOBALS['TCA']['tt_content']['types']['testimonials'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            section_subtitle;Section Subtitle (H3),
            section_title;Section Title (H2),
            section_description;Section Description,
        --div--;Testimonial 1,
            testimonial1_text;Text,
            testimonial1_author;Author Name,
            testimonial1_rating;Rating,
        --div--;Testimonial 2,
            testimonial2_text;Text,
            testimonial2_author;Author Name,
            testimonial2_rating;Rating,
        --div--;Testimonial 3,
            testimonial3_text;Text,
            testimonial3_author;Author Name,
            testimonial3_rating;Rating,
        --div--;Testimonial 4,
            testimonial4_text;Text,
            testimonial4_author;Author Name,
            testimonial4_rating;Rating,
        --div--;Testimonial 5,
            testimonial5_text;Text,
            testimonial5_author;Author Name,
            testimonial5_rating;Rating,
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