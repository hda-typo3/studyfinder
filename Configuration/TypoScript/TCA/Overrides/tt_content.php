<?php

defined('TYPO3') || die();

call_user_func(
    static function (): void {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Studyfinder',
            'Program',
            'LLL:EXT:studyfinder/Resources/Private/Language/locallang.xlf:plugin.program',
            'EXT:studyfinder/Resources/Public/Icons/Extension.svg'
        );


        $GLOBALS['TCA']['tt_content']['types']['search']['subtypes_excludelist']['studyfinder_program'] = 'select_key,pages,recursive';
    }
);
