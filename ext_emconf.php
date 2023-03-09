<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'AV-Stumpfl partners',
    'description' => 'Extension for viewing companies on a svg map.',
    'category' => 'plugin',
    'author' => 'Walter Kruml',
    'author_email' => 'walter@opaque.at',
    'state' => 'beta',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
