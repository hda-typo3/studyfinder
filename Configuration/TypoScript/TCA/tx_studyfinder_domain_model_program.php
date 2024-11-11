<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
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
        'searchFields' => 'title,pre_practical_training,additional_adminission_requirements,comment',
        'iconfile' => 'EXT:hda_academicprogram/Resources/Public/Icons/program.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, language, nc, pre_practical_training, additional_adminission_requirements, consecutive, discontinued, dual, startyear, location, department, comment, programtypes, category, targetgroup, degree, semester, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
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
                'foreign_table' => 'tx_hdaacademicprogram_domain_model_program',
                'foreign_table_where' => 'AND {#tx_hdaacademicprogram_domain_model_program}.{#pid}=###CURRENT_PID### AND {#tx_hdaacademicprogram_domain_model_program}.{#sys_language_uid} IN (-1,0)',
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

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'language' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.language.0',
                        0,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.language.1',
                        1,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.language.2',
                        2,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.language.3',
                        3,
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        
        'nc' => [
            'exclude' => 1,
            'label' =>  'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.nc',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.nc.0',
                        0,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.nc.1',
                        1,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.nc.2',
                        2,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.nc.3',
                        3,
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        
        'pre_practical_training' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.pre_practical_training',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'additional_adminission_requirements' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.additional_adminission_requirements',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'consecutive' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.consecutive',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'discontinued' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.discontinued',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'dual' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.dual',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'startyear' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.startyear',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' =>  [
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.startyear.0',
                        0,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.startyear.1',
                        1,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.startyear.2',
                        2,
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'location' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.location',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' =>[
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.location.0',
                        0,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.location.1',
                        1,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.location.2',
                        2,
                    ],
                    [
                        'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.location.3',
                        3,
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'department' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.department',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
            ]
        ],
        'comment' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.comment',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'programtypes' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.programtypes',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_hdaacademicprogram_domain_model_programtype',
                'size' => 6,
                'minitems' => 1,
                'maxitems' => 50
            ]
        ],
        'category' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_hdaacademicprogram_domain_model_category',
                'minitems' => 1,
                'maxitems' => 10,
            ],
            
        ],
        'targetgroup' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.targetgroup',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_hdaacademicprogram_domain_model_targetgroup',
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
        'degree' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.degree',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_hdaacademicprogram_domain_model_degree',
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'semester' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_program.semester',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_hdaacademicprogram_domain_model_semester',
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
    
    ],
];
