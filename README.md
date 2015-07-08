# EXT:solr - Sitehash Disabler

Usually one should use one Solr core per site (and language). If you have to 
index multiple sites into the same core the site hash makes sure that you still
only get results for the correct site - that is the site the query was triggered 
from. 

This TYPO3 CMS Extension disables the sitehash restrictions. Use at own peril.

## Setup

In your TypoScript configuration add the following to remove the site hash. 

```
plugin.tx_solr.query.disableSiteHash = 1
``` 

