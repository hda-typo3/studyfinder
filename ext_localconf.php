<?php

declare(strict_types=1);

use Hda\Studyfinder\Controller\StudyfinderController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die('Access denied.');

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Studyfinder',
        'Program',
        [
            StudyfinderController:class => 'list, show, all, degree, programtype, category'
        ],
        // non-cacheable actions
        [
            StudyfinderController::class => 'all'
        ]
    );
});
