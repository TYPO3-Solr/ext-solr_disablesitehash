<?php
namespace ApacheSolrForTypo3\SolrDisablesitehash;

/***************************************************************
*  Copyright notice
*
*  (c) 2010-2015 Ingo Renner <ingo@typo3.org>
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


/**
 * Disables the use of the sitehash filter in Solr queries
 *
 * @author Ingo Renner <ingo@typo3.org>
 */
class DisableSitehashQueryModifier implements \ApacheSolrForTypo3\Solr\Query\Modifier\Modifier {

	/**
	 * Removes the filter on the siteHash field
	 *
	 * @param \ApacheSolrForTypo3\Solr\Query $query The query to modify
	 * @return \ApacheSolrForTypo3\Solr\Query The modified query without the siteHash filter
	 */
	public function modifyQuery(\ApacheSolrForTypo3\Solr\Query $query) {
		if ($GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_solr.']['query.']['disableSiteHash']) {
			$query->removeFilter('siteHash');
		}

		return $query;
	}
}

