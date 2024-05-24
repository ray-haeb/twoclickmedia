<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Two-Click Media',
    'description' => 'Two click solution to include YouTube / Vimeo videos',
    'category' => 'misc',
    'author' => 'b13 GmbH',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'version' => 'dev-treesoft-1.0.6',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' =>
            [
                'B13\\Twoclickmedia\\' => 'Classes',
            ],
    ],
];
