<?php
// site_package/Configuration/TCA/Overrides/elementi/FaqSection.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'FAQ Section',
        'faq_section',
        'content-text'
    ]
);

// Configure the fields
$faqFields = [
    'faq_title' => [
        'exclude' => true,
        'label' => 'FAQ Glavni naslov (H2)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_subtitle' => [
        'exclude' => true,
        'label' => 'FAQ Podnaslov (H3)',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_image' => [
        'exclude' => true,
        'label' => 'FAQ Slika',
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
    'faq_question_1' => [
        'exclude' => true,
        'label' => 'Pitanje 1',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_1' => [
        'exclude' => true,
        'label' => 'Odgovor 1',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_2' => [
        'exclude' => true,
        'label' => 'Pitanje 2',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_2' => [
        'exclude' => true,
        'label' => 'Odgovor 2',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_3' => [
        'exclude' => true,
        'label' => 'Pitanje 3',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_3' => [
        'exclude' => true,
        'label' => 'Odgovor 3',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_4' => [
        'exclude' => true,
        'label' => 'Pitanje 4',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_4' => [
        'exclude' => true,
        'label' => 'Odgovor 4',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_5' => [
        'exclude' => true,
        'label' => 'Pitanje 5',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_5' => [
        'exclude' => true,
        'label' => 'Odgovor 5',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_6' => [
        'exclude' => true,
        'label' => 'Pitanje 6',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_6' => [
        'exclude' => true,
        'label' => 'Odgovor 6',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_7' => [
        'exclude' => true,
        'label' => 'Pitanje 7',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_7' => [
        'exclude' => true,
        'label' => 'Odgovor 7',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_8' => [
        'exclude' => true,
        'label' => 'Pitanje 8',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_8' => [
        'exclude' => true,
        'label' => 'Odgovor 8',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_9' => [
        'exclude' => true,
        'label' => 'Pitanje 9',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_9' => [
        'exclude' => true,
        'label' => 'Odgovor 9',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
    'faq_question_10' => [
        'exclude' => true,
        'label' => 'Pitanje 10',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'faq_answer_10' => [
        'exclude' => true,
        'label' => 'Odgovor 10',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $faqFields);

// Create a new palette for our custom fields
$GLOBALS['TCA']['tt_content']['types']['faq_section'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            faq_title;FAQ Glavni naslov,
            faq_subtitle;FAQ Podnaslov,
        --div--;Slika,
            faq_image,
        --div--;FAQ Pitanja 1-5,
            faq_question_1,
            faq_answer_1,
            faq_question_2,
            faq_answer_2,
            faq_question_3,
            faq_answer_3,
            faq_question_4,
            faq_answer_4,
            faq_question_5,
            faq_answer_5,
        --div--;FAQ Pitanja 6-10,
            faq_question_6,
            faq_answer_6,
            faq_question_7,
            faq_answer_7,
            faq_question_8,
            faq_answer_8,
            faq_question_9,
            faq_answer_9,
            faq_question_10,
            faq_answer_10,
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
        'faq_answer_1' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_2' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_3' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_4' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_5' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_6' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_7' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_8' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_9' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'faq_answer_10' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
    ]
];