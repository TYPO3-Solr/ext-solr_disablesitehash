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

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Solr - Sitehash Disabler',
	'description' => 'Disables the use of the site hash filter in Solr queries.',
	'version' => '2.0.0-dev',
	'author' => 'Solr Community Team',
	'author_email' => 'solr-team@dkd.de',
	'author_company' => 'Solr Community Team',
	'category' => 'fe',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => true,
	'lockType' => '',
	'constraints' => array(
			'depends' => array(
				'php' => '5.5.0-0.0.0',
				'typo3' => '4.5.0-6.2.99',
				'solr' => '3.0.0-3.9.99',
			),
			'conflicts' => array(),
			'suggests' => array(),
		),
	'_md5_values_when_last_written' => 'a:4:{s:9:"ChangeLog";s:4:"d561";s:12:"ext_icon.gif";s:4:"11e4";s:17:"ext_localconf.php";s:4:"1a7a";s:69:"Classes/DisableSitehashQueryModifier.php";s:4:"0e30";}',
);