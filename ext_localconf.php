<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['EXTCONF']['solr']['modifySearchQuery']['removeSiteHashFilter'] = 'EXT:solr_disablesitehash/Classes/DisableSitehashQueryModifier.php:tx_solrdisablesitehash_DisableSitehashQueryModifier';
