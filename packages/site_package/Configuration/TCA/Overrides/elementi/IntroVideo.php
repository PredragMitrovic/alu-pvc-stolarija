<?php
// site_package/Configuration/TCA/Overrides/elementi/IntroVideo.php

defined('TYPO3') or die();

// Configure the new content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Intro Video',
        'intro_video',
        'content-text'
    ]
);

// Configure the fields
$introVideoFields = [
    'video_url' => [
        'exclude' => true,
        'label' => 'YouTube Video URL (full URL or video ID)',
        'description' => 'Enter YouTube URL (https://www.youtube.com/watch?v=CODE or https://youtu.be/CODE) or just the video ID',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim'
        ],
    ],
    'video_image' => [
        'exclude' => true,
        'label' => 'Video Preview Image',
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
    'play_button_text' => [
        'exclude' => true,
        'label' => 'Play Button Text',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => 'play'
        ],
    ],
    'cursor_text' => [
        'exclude' => true,
        'label' => 'Cursor Text',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => 'Play'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $introVideoFields);

// Create a new palette for our custom fields
$GLOBALS['TCA']['tt_content']['types']['intro_video'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            bodytext;Description,
        --div--;Video Properties,
            video_url,
            video_image,
            play_button_text,
            cursor_text,
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