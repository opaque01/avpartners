<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_avpartners_domain_model_partners', 'EXT:avpartners/Resources/Private/Language/locallang_csh_tx_avpartners_domain_model_partners.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_avpartners_domain_model_partners');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_avpartners_domain_model_countries', 'EXT:avpartners/Resources/Private/Language/locallang_csh_tx_avpartners_domain_model_countries.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_avpartners_domain_model_countries');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_avpartners_domain_model_categories', 'EXT:avpartners/Resources/Private/Language/locallang_csh_tx_avpartners_domain_model_categories.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_avpartners_domain_model_categories');
})();
