<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['EXTCONF']['solr']['modifySearchQuery']['removeSiteHashFilter'] = \ApacheSolrForTypo3\SolrDisablesitehash\DisableSitehashQueryModifier::class;
