<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Ingo Renner <ingo@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


require_once($GLOBALS['PATH_solr'] . 'Interfaces/QueryModifier.php');

/**
 * Disables the use of the sitehash filter in Solr queries
 *
 * @author	Ingo Renner <ingo@typo3.org>
 * @package TYPO3
 * @subpackage solr_disablesitehash
 */
class tx_solrdisablesitehash_DisableSitehashQueryModifier implements Tx_Solr_QueryModifier {

	/**
	 * Modifies the given query, currently removes the filter on the siteHash field
	 *
	 * @param	tx_solr_Query	The query to modify
	 * @return	tx_solr_Query	The modified query without the siteHash filter
	 */
	public function modifyQuery(tx_solr_Query $query) {

		if ($GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_solr.']['query.']['disableSiteHash']) {
			$query->removeFilter('siteHash');
		}

		return $query;
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/solr_disablesitehash/classes/class.tx_solrdisablesitehash_disablesitehashquerymodifier.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/solr_disablesitehash/classes/class.tx_solrdisablesitehash_disablesitehashquerymodifier.php']);
}

?>
