<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'B13.Simpleevents', 'upcoming', 'LLL:EXT:simpleevents/Resources/Private/Language/locallang_db.xlf:plugin.upcoming', 'EXT:simpleevents/ext_icon.png'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'B13.Simpleevents', 'list', 'LLL:EXT:simpleevents/Resources/Private/Language/locallang_db.xlf:plugin.list', 'EXT:simpleevents/ext_icon.png'
);