<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,address,zip,city,phone,fax,url,email,comment',
        'iconfile' => 'EXT:avpartners/Resources/Public/Icons/tx_avpartners_domain_model_partners.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, logo, address, zip, city, phone, fax, url, email, comment, categories, country, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_avpartners_domain_model_partners',
                'foreign_table_where' => 'AND {#tx_avpartners_domain_model_partners}.{#pid}=###CURRENT_PID### AND {#tx_avpartners_domain_model_partners}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'logo' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.logo',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'logo',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'logo',
                        'tablenames' => 'tx_avpartners_domain_model_partners',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            
        ],
        'address' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,null',
                'default' => null
            ],
        ],
        'zip' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,null',
                'default' => null
            ],
        ],
        'city' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,null',
                'default' => null
            ],
        ],
        'phone' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,null',
                'default' => null
            ],
        ],
        'fax' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.fax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,null',
                'default' => null
            ],
        ],
        'url' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.url',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ]
        ],
        'email' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email,null',
                'default' => null
            ]
        ],
        'comment' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.comment',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,null',
                'default' => null
            ]
        ],
        'categories' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.categories',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_avpartners_domain_model_categories',
                'default' => 0,
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'country' => [
            'exclude' => false,
            'label' => 'LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_domain_model_partners.country',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_avpartners_domain_model_countries',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
    
    ],
];
