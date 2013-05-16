<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Simply Responsive Content');

$tmp_columns = array(
	'responsive_touch' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:responsive_touch',
		'config' => array(
			'type' => 'radio',
			'items' => array (
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:default', ''),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_touch', 'hide-for-touch'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_touch', 'show-for-touch'),
			),
			'default' => 0,
		),
	),
	'responsive_show' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:responsive_show',
		'config' => array(
			'type' => 'radio',
			'items' => array (
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:default', ''),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_small', 'show-for-small'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_medium_down', 'show-for-medium-down'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_medium', 'show-for-medium'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_medium_up', 'show-for-medium-up'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_large_down', 'show-for-large-down'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_large', 'show-for-large'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_large_up', 'show-for-large-up'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_xlarge', 'show-for-xlarge'),
			),
			'default' => 0,
		),
	),
	'responsive_hide' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:responsive_hide',
		'config' => array(
			'type' => 'radio',
			'items' => array (
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:default', ''),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_small', 'hide-for-small'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_medium_down', 'hide-for-medium-down'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_medium', 'hide-for-medium'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_medium_up', 'hide-for-medium-up'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_large_down', 'hide-for-large-down'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_large', 'hide-for-large'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_large_up', 'hide-for-large-up'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_xlarge', 'hide-for-xlarge'),
			),
			'default' => 0,
		),
	),
	'responsive_orientation' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:responsive_orientation',
		'config' => array(
			'type' => 'radio',
			'items' => array (
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:default', ''),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_landscape', 'show-for-landscape'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:show_for_portrait', 'show-for-portrait'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_landscape', 'hide-for-landscape'),
				array('LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:hide_for_portrait', 'hide-for-portrait'),
			),
			'default' => 0,
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tmp_columns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--div--;LLL:EXT:simply_responsive_content/Resources/Private/Language/locallang_db.xlf:responsive, responsive_touch, responsive_orientation, responsive_show, responsive_hide');
?>