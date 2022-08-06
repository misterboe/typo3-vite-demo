<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['typo3_vite_demo'] = 'EXT:typo3_vite_demo/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:typo3_vite_demo/Configuration/TsConfig/Page/All.tsconfig">');

/***************
 * Fluid Components
 */
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluid_components']['namespaces']['FlorianGeierstanger\\Typo3ViteDemo\\Components'] =
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('typo3_vite_demo', 'Resources/Private/Components');