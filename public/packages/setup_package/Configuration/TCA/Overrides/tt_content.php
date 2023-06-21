<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
$packageKey = 'EXT:setup_package';

// Set tt_content sectionIndex to 0
$GLOBALS['TCA']['tt_content']['columns']['sectionIndex']['config']['default'] = 0;

// Containers

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'section',
        'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-section-title',
        'LLL:' . $packageKey . '/Resources/Private/Language/locallang.xlf:ctype.section.desc',
        [
            [
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:section', 'colPos' => 501]
                ]
            ]
        )
    )
    ->setIcon('' . $packageKey . '/Resources/Public/Icons/SVGs/Active/onecol.png')
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:' . $packageKey . '/Configuration/FlexForms/Section.xml',
    'section'
);

$GLOBALS['TCA']['tt_content']['types']['section']['showitem'] = 'sys_language_uid,CType,header,layout,sectionIndex,pi_flexform';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'cols_2',
        'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-2-col-title',
        'LLL:' . $packageKey . '/Resources/Private/Language/locallang.xlf:ctype.col-2.desc',
        [
            [
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-1', 'colPos' => 201],
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-2', 'colPos' => 202]
                ]
            ]
        )
    )
    ->setIcon('' . $packageKey . '/Resources/Public/Icons/SVGs/Active/2-col.svg')
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:' . $packageKey . '/Configuration/FlexForms/2ColSet.xml',
    'cols_2'
);

$GLOBALS['TCA']['tt_content']['types']['cols_2']['showitem'] = 'sys_language_uid,CType,header,header_layout,header_position,layout,colPos,tx_container_parent,pi_flexform';


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'cols_3',
        'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-3-col-title',
        'LLL:' . $packageKey . '/Resources/Private/Language/locallang.xlf:ctype.col-3.desc',
        [
            [
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-1', 'colPos' => 301],
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-2', 'colPos' => 302],
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-3', 'colPos' => 303]
            ]
        ]
        )
    )
    ->setIcon('' . $packageKey . '/Resources/Public/Icons/SVGs/Active/3-col.svg')
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:' . $packageKey . '/Configuration/FlexForms/3ColSet.xml',
    'cols_3'
);

$GLOBALS['TCA']['tt_content']['types']['cols_3']['showitem'] = 'sys_language_uid,CType,header,layout,colPos,tx_container_parent,pi_flexform';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'cols_4',
        'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-4-col-title',
        'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:ctype.col-4.desc',
        //'' . $packageKey . '/Resources/Public/Icons/SVGs/Active/4-col.svg',
        [
            [
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-1', 'colPos' => 401],
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-2', 'colPos' => 402],
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-3', 'colPos' => 403],
                ['name' => 'LLL:' . $packageKey . '/Resources/Private/Language/Backend/locallang.xlf:grid-4', 'colPos' => 404]
            ]
        ]
        )
    )
    ->setIcon('' . $packageKey . '/Resources/Public/Icons/SVGs/Active/4-col.svg')
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:' . $packageKey . '/Configuration/FlexForms/4ColSet.xml',
    'cols_4'
);
$GLOBALS['TCA']['tt_content']['types']['cols_4']['showitem'] = 'sys_language_uid,CType,header,layout,colPos,tx_container_parent,pi_flexform';


/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'theme',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => '' . $packageKey . '/ext_icon.gif']
);