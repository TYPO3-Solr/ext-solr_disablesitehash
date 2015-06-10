<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "solr".
 *
 * Auto generated 08-06-2015 13:10
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Solr Disablesitehash',
	'description' => 'Solr Disablesitehash (please add plugin.tx_solr.query.disableSiteHash = 1 )',
	'category' => 'plugin',
	'version' => '3.0.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Solr Community Team',
	'author_email' => 'solr-team@dkd.de',
	'author_company' => 'Solr Community Team',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.0-6.2.99',
			'solr' => '3.0.0-3.9.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

