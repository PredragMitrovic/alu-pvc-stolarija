<?php
// site_package/Configuration/TCA/Overrides/elementi/LeftMenu.php

defined('TYPO3') or die();



// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Left Menu',
        'left_menu',
        'content-text'
    ]
);

// Configure the fields

$leftMenuFields = [
    'tri_link' => [
        'exclude' => true,
        'label' => 'link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'cetiri_link' => [
        'exclude' => true,
        'label' => 'link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'pet_link' => [
        'exclude' => true,
        'label' => 'link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'sest_link' => [
        'exclude' => true,
        'label' => 'link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'sedam_link' => [
        'exclude' => true,
        'label' => 'link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $leftMenuFields);
$GLOBALS['TCA']['tt_content']['types']['left_menu'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;Link Items 1,
            faq_question_1;Link Title 1,
            btn_link;Link URL 1,
            faq_question_2;Icon Class 1,
            
            --div--;Link Items 2,
            faq_question_3;Link Title 2,
            work_learn_more_link;Link URL 2,
            faq_question_4;Icon Class 2,
            
            --div--;Link Items 3,
            faq_question_5;Link Title 3,
            tri_link;Link URL 3,
            faq_question_6;Icon Class 3,
            
            --div--;Link Items 4,
            faq_question_7;Link Title 4,
            cetiri_link;Link URL 4, 
            faq_question_8;Icon Class 4,
            
            --div--;Link Items 5,
            faq_question_9;Link Title 5,
            pet_link;Link URL 5, 
            faq_question_10;Icon Class 5,
            
            --div--;Link Items 6,
            faq_answer_2;Link Title 6,
            sest_link;Link URL 6,
            faq_answer_6;Icon Class 6,
            
            --div--;Link Items 7,
            faq_answer_8;Link Title 7,
            sedam_link;Link URL 7,
            facility_title_1;Icon Class 7,
            
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