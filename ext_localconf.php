<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['EXTCONF']['solr']['modifySearchQuery']['removeSiteHashFilter'] = 'EXT:solr_disablesitehash/Classes/class.tx_solrdisablesitehash_disablesitehashquerymodifier.php:tx_solrdisablesitehash_DisableSitehashQueryModifier';
