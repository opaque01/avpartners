<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_categories',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],
        'searchFields' => 'name',
        'iconfile' => 'EXT:avpartners/Resources/Public/Icons/tx_avpartners_domain_model_categories.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_avpartners_domain_model_categories',
                'foreign_table_where' => 'AND {#tx_avpartners_domain_model_categories}.{#pid}=###CURRENT_PID### AND {#tx_avpartners_domain_model_categories}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_categories.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
    
    ],
];
