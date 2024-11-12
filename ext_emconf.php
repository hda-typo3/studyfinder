<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "studyfinder"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Studyfinder Extension',
    'description' => 'Extension for the h_da studyprograms',
    'version' => '1.0.0',
    'category' => 'frontend',
    'constraints' => [
        'depends' => [
            'php' => '8.3-',
            'frontend' => '12.4-',
        ],
    ],
    'state' => 'alpha',
    'uploadfolder' => false,
    'createDirs' => '',
    'author' => 'Michael Lang',
    'author_email' => 'michael.lang@h-da.de',
    'author_company' => 'h_da.de',
    'autoload' => [
        'psr-4' => [
            'T3md\\Measure\\' => 'Classes/',
        ],
    ],
];
