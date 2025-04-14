<?php

$EM_CONF['site_package'] = [ // Zamenite 'site_package' sa stvarnim ključem ekstenzije
    'title' => 'Site Package',
    'description' => 'Custom Site Package for TYPO3 13',
    'category' => 'templates',
    'author' => 'Ime Prezime',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'constraints' => [
        'depends' => [
            'typo3' => '^13.0',
        ],
    ],
];
