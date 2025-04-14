<?php

defined('TYPO3') or die();

call_user_func(function() {
    $GLOBALS['TCA']['tt_content']['types']['sitepackage_gridcontainer'] = [
        'showitem' => '
            --palette--;;general,
            --palette--;;headers,
            --div--;Grid Settings,
            --palette--;;frames,
            --div--;Grid Content,
            --container--;;1
        ',
    ];

    $GLOBALS['TCA']['tt_content']['columns']['colPos']['config']['items'][] = [
        'Grid Container (site_package)',
        100,
        'content-grid'
    ];
});
