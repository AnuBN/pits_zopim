<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'PITS.' . $_EXTKEY,
    'Pitszopim',
    'Zopim Chat'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pitszopim';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pitszopim.xml');

$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['Tx_Zopim_WizzardIcon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Utility/Wizard.php';

if (TYPO3_MODE === 'BE') {

    /**
     * Registers a Backend Module
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'PITS.' . $_EXTKEY,
        'web',   // Make module a submodule of 'web'
        'pitszopimmod', // Submodule key
        '',                     // Position
        array(
            'Zopimmod' => 'new',
        ),

        array(
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_pitszopimmod.xlf',
            'navigationComponentId' => FALSE,
        )
    );

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Zopim Chat');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pitszopim_domain_model_project', 'EXT:pits_zopim/Resources/Private/Language/locallang_csh_tx_pitszopim_domain_model_project.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pitszopim_domain_model_project');
