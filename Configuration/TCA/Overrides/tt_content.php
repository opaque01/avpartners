<?php
defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Avpartners',
    'Partners',
    'Partners'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['avpartners_partners'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'avpartners_partners',
    'FILE:EXT:avpartners/Configuration/FlexForms/flexform_partners.xml'
);
