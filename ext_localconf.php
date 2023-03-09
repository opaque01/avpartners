<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Avpartners',
        'Partners',
        [
            \Od\Avpartners\Controller\PartnersController::class => 'list'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    partners {
                        iconIdentifier = avpartners-plugin-partners
                        title = LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_partners.name
                        description = LLL:EXT:avpartners/Resources/Private/Language/locallang_db.xlf:tx_avpartners_partners.description
                        tt_content_defValues {
                            CType = list
                            list_type = avpartners_partners
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
