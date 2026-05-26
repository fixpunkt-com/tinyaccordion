<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

foreach (['content', 'contentui', 'page', 'pageui', 'news', 'newsui'] as $plugin) {
    $pluginSignature = ExtensionUtility::registerPlugin(
        'Tinyaccordion',
        ucfirst($plugin),
        'LLL:EXT:tinyaccordion/Resources/Private/Language/locallang_be.xml:tinyaccordion_title_' . $plugin,
        'ext-tinyaccordion-wizard-icon',
        'tinyaccordion',
        'LLL:EXT:tinyaccordion/Resources/Private/Language/locallang_be.xlf:tinyaccordion_description'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        '--div--;Configuration,pi_flexform,pages',
        $pluginSignature,
        'after:subheader'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:tinyaccordion/Configuration/FlexForms/flexform_pi1.xml',
        $pluginSignature
    );
}
