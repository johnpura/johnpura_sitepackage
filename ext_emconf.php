<?php

/**
 * Extension Manager/Repository config file for ext "johnpura_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'johnpura sitepackage',
    'description' => 'TYPO3 Sitepackage for my website',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Pura\\JohnpuraSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'John Pura',
    'author_email' => 'jepura@gmail.com',
    'author_company' => 'Pura',
    'version' => '1.0.0',
];
