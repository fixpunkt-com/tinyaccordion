<?php
declare(strict_types=1);

use Quizpalme\Tinyaccordion\Controller\SelectionController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Information\Typo3Version;

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        ExtensionUtility::configurePlugin(
            'Tinyaccordion',
            'Content',
            [
                SelectionController::class => 'content'
            ],
            [
                SelectionController::class => ''
            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );
        ExtensionUtility::configurePlugin(
            'Tinyaccordion',
            'Contentui',
            [
                SelectionController::class => 'content_ui_accordion'
            ],
            [
                SelectionController::class => ''
            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );
        ExtensionUtility::configurePlugin(
            'Tinyaccordion',
            'News',
            [
                SelectionController::class => 'news'
            ],
            [
                SelectionController::class => ''
            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );
        ExtensionUtility::configurePlugin(
            'Tinyaccordion',
            'Newsui',
            [
                SelectionController::class => 'news_ui_accordion'
            ],
            [
                SelectionController::class => ''
            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );
        ExtensionUtility::configurePlugin(
            'Tinyaccordion',
            'Page',
            [
                SelectionController::class => 'pages'
            ],
            [
                SelectionController::class => ''
            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );
        ExtensionUtility::configurePlugin(
            'Tinyaccordion',
            'Pageui',
            [
                SelectionController::class => 'pages_ui_accordion'
            ],
            [
                SelectionController::class => ''
            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );
    }
);