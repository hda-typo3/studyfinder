<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "studyfinder"
 *
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'hda studyfinder',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Michael Lang',
    'author_email' => 'michael.lang@h-da.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
