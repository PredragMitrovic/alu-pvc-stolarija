<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:site_package/Configuration/TypoScript/setup.typoscript'"
);



// kažeš EXT:news‑u da proširi svoj News‑model
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News']['site_package'] = 'site_package';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:form/Resources/Private/Language/locallang.xlf'][] =
    'EXT:site_package/Resources/Private/Language/locallang.xlf';
