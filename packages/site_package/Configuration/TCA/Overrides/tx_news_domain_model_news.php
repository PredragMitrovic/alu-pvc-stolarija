<?php
// File path: your_extension/Configuration/TCA/Overrides/tx_news_domain_model_news.php
defined('TYPO3') or die();

// Add the quote field to the news model
$tempColumns = [
    'tx_myext_quote' => [
        'exclude' => true,
        'label' => 'Quote',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'eval' => 'trim',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    'tx_myext_quote',
    '',
    'after:bodytext'
);