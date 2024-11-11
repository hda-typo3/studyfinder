<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_semester',
        'label' => 'title',
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
        'searchFields' => '',
        'iconfile' => 'EXT:hda_academicprogram/Resources/Public/Icons/semester.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, title'],
    ],
    'columns' => [
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hda_academicprogram/Resources/Private/Language/locallang.xlf:tx_hdaacademicprogram_domain_model_semester.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
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
    ],
];
