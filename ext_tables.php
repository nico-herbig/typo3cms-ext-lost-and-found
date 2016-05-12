<?php

defined('TYPO3_MODE') or die();

/**
 * Find Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'FindPlugin',
    'Lost And Found: List Finds'
);

/* PROTECTED REGION ID(ext_tables.php.own.plugin.code.eee_1045467100313_135436_1) ENABLED START */
/* PROTECTED REGION END */

if (TYPO3_MODE === 'BE') {
    /* PROTECTED REGION ID(ext_tables.php.own.module.code.eee_1045467100313_135436_1) ENABLED START */
	/* PROTECTED REGION END */
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Systemmacher LostAndFound Setup');

/* PROTECTED REGION ID(ext_tables.php.own.typoscript.code.eee_1045467100313_135436_1) ENABLED START */
/* PROTECTED REGION END */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lostandfound_domain_model_category', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_csh_tx_lostandfound_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lostandfound_domain_model_find', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_csh_tx_lostandfound_domain_model_find.xlf');

/* PROTECTED REGION ID(ext_tables.php.own.code.eee_1045467100313_135436_1) ENABLED START */
/* PROTECTED REGION END */
