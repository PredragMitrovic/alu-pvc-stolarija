<?php
return unserialize('a:2:{s:3:"ast";O:43:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\RootNode":1:{s:8:"children";a:11:{s:18:"pageTitleProviders";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:18:"pageTitleProviders";s:8:"children";a:3:{s:6:"record";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:6:"record";s:8:"children";a:1:{s:8:"provider";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:8:"provider";s:8:"children";a:0:{}s:5:"value";s:48:"TYPO3\\CMS\\Core\\PageTitle\\RecordPageTitleProvider";}}}s:3:"seo";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:3:"seo";s:8:"children";a:2:{s:8:"provider";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:8:"provider";s:8:"children";a:0:{}s:5:"value";s:49:"TYPO3\\CMS\\Seo\\PageTitle\\SeoTitlePageTitleProvider";}s:6:"before";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:6:"before";s:8:"children";a:0:{}s:5:"value";s:6:"record";}}}s:4:"news";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:4:"news";s:8:"children";a:2:{s:8:"provider";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:8:"provider";s:8:"children";a:0:{}s:5:"value";s:38:"GeorgRinger\\News\\Seo\\NewsTitleProvider";}s:6:"before";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:6:"before";s:8:"children";a:0:{}s:5:"value";s:10:"record,seo";}}}}}s:10:"tx_extbase";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:10:"tx_extbase";s:8:"children";a:2:{s:3:"mvc";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:3:"mvc";s:8:"children";a:1:{s:48:"throwPageNotFoundExceptionIfActionCantBeResolved";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:48:"throwPageNotFoundExceptionIfActionCantBeResolved";s:8:"children";a:0:{}s:5:"value";s:1:"0";}}}s:11:"persistence";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:11:"persistence";s:8:"children";a:3:{s:28:"enableAutomaticCacheClearing";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:28:"enableAutomaticCacheClearing";s:8:"children";a:0:{}s:5:"value";s:1:"1";}s:20:"updateReferenceIndex";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:20:"updateReferenceIndex";s:8:"children";a:0:{}s:5:"value";s:1:"0";}s:7:"classes";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:7:"classes";s:8:"children";a:4:{s:34:"GeorgRinger\\News\\Domain\\Model\\News";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:34:"GeorgRinger\\News\\Domain\\Model\\News";s:8:"children";a:1:{s:10:"subclasses";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:10:"subclasses";s:8:"children";a:3:{i:0;O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:1:"0";s:8:"children";a:0:{}s:5:"value";s:41:"GeorgRinger\\News\\Domain\\Model\\NewsDefault";}i:1;O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:1:"1";s:8:"children";a:0:{}s:5:"value";s:42:"GeorgRinger\\News\\Domain\\Model\\NewsInternal";}i:2;O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:1:"2";s:8:"children";a:0:{}s:5:"value";s:42:"GeorgRinger\\News\\Domain\\Model\\NewsExternal";}}}}}s:41:"GeorgRinger\\News\\Domain\\Model\\NewsDefault";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:41:"GeorgRinger\\News\\Domain\\Model\\NewsDefault";s:8:"children";a:1:{s:7:"mapping";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:7:"mapping";s:8:"children";a:2:{s:10:"recordType";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:10:"recordType";s:8:"children";a:0:{}s:5:"value";s:1:"0";}s:9:"tableName";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:9:"tableName";s:8:"children";a:0:{}s:5:"value";s:25:"tx_news_domain_model_news";}}}}}s:42:"GeorgRinger\\News\\Domain\\Model\\NewsInternal";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:42:"GeorgRinger\\News\\Domain\\Model\\NewsInternal";s:8:"children";a:1:{s:7:"mapping";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:7:"mapping";s:8:"children";a:2:{s:10:"recordType";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:10:"recordType";s:8:"children";a:0:{}s:5:"value";s:1:"1";}s:9:"tableName";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:9:"tableName";s:8:"children";a:0:{}s:5:"value";s:25:"tx_news_domain_model_news";}}}}}s:42:"GeorgRinger\\News\\Domain\\Model\\NewsExternal";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:42:"GeorgRinger\\News\\Domain\\Model\\NewsExternal";s:8:"children";a:1:{s:7:"mapping";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:7:"mapping";s:8:"children";a:2:{s:10:"recordType";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:10:"recordType";s:8:"children";a:0:{}s:5:"value";s:1:"2";}s:9:"tableName";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:9:"tableName";s:8:"children";a:0:{}s:5:"value";s:25:"tx_news_domain_model_news";}}}}}}}}}}}s:29:"contentObjectExceptionHandler";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:29:"contentObjectExceptionHandler";s:8:"children";a:0:{}s:5:"value";s:1:"0";}s:8:"linkVars";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:8:"linkVars";s:8:"children";a:0:{}s:5:"value";s:1:"L";}s:16:"sys_language_uid";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:16:"sys_language_uid";s:8:"children";a:0:{}s:5:"value";s:1:"0";}s:8:"language";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:8:"language";s:8:"children";a:0:{}s:5:"value";s:2:"sr";}s:10:"locale_all";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:10:"locale_all";s:8:"children";a:0:{}s:5:"value";s:11:"sr_RS.UTF-8";}s:15:"htmlTag_langKey";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:15:"htmlTag_langKey";s:8:"children";a:0:{}s:5:"value";s:2:"sr";}s:11:"_LOCAL_LANG";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:11:"_LOCAL_LANG";s:8:"children";a:3:{s:2:"sr";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:2:"sr";s:8:"children";a:1:{s:6:"footer";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:6:"footer";s:8:"children";a:1:{s:7:"company";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:7:"company";s:8:"children";a:0:{}s:5:"value";s:10:"Moja firma";}}}}}s:2:"en";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:2:"en";s:8:"children";a:1:{s:6:"footer";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:6:"footer";s:8:"children";a:1:{s:7:"company";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:7:"company";s:8:"children";a:0:{}s:5:"value";s:10:"My company";}}}}}s:2:"de";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:2:"de";s:8:"children";a:1:{s:6:"footer";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":2:{s:4:"name";s:6:"footer";s:8:"children";a:1:{s:7:"company";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:7:"company";s:8:"children";a:0:{}s:5:"value";s:11:"Meine Firma";}}}}}}}s:12:"absRefPrefix";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:12:"absRefPrefix";s:8:"children";a:0:{}s:5:"value";s:4:"auto";}s:7:"doctype";O:44:"TYPO3\\CMS\\Core\\TypoScript\\AST\\Node\\ChildNode":3:{s:4:"name";s:7:"doctype";s:8:"children";a:0:{}s:5:"value";s:5:"html5";}}}s:5:"array";a:11:{s:19:"pageTitleProviders.";a:3:{s:7:"record.";a:1:{s:8:"provider";s:48:"TYPO3\\CMS\\Core\\PageTitle\\RecordPageTitleProvider";}s:4:"seo.";a:2:{s:8:"provider";s:49:"TYPO3\\CMS\\Seo\\PageTitle\\SeoTitlePageTitleProvider";s:6:"before";s:6:"record";}s:5:"news.";a:2:{s:8:"provider";s:38:"GeorgRinger\\News\\Seo\\NewsTitleProvider";s:6:"before";s:10:"record,seo";}}s:11:"tx_extbase.";a:2:{s:4:"mvc.";a:1:{s:48:"throwPageNotFoundExceptionIfActionCantBeResolved";s:1:"0";}s:12:"persistence.";a:3:{s:28:"enableAutomaticCacheClearing";s:1:"1";s:20:"updateReferenceIndex";s:1:"0";s:8:"classes.";a:4:{s:35:"GeorgRinger\\News\\Domain\\Model\\News.";a:1:{s:11:"subclasses.";a:3:{i:0;s:41:"GeorgRinger\\News\\Domain\\Model\\NewsDefault";i:1;s:42:"GeorgRinger\\News\\Domain\\Model\\NewsInternal";i:2;s:42:"GeorgRinger\\News\\Domain\\Model\\NewsExternal";}}s:42:"GeorgRinger\\News\\Domain\\Model\\NewsDefault.";a:1:{s:8:"mapping.";a:2:{s:10:"recordType";s:1:"0";s:9:"tableName";s:25:"tx_news_domain_model_news";}}s:43:"GeorgRinger\\News\\Domain\\Model\\NewsInternal.";a:1:{s:8:"mapping.";a:2:{s:10:"recordType";s:1:"1";s:9:"tableName";s:25:"tx_news_domain_model_news";}}s:43:"GeorgRinger\\News\\Domain\\Model\\NewsExternal.";a:1:{s:8:"mapping.";a:2:{s:10:"recordType";s:1:"2";s:9:"tableName";s:25:"tx_news_domain_model_news";}}}}}s:29:"contentObjectExceptionHandler";s:1:"0";s:8:"linkVars";s:1:"L";s:16:"sys_language_uid";s:1:"0";s:8:"language";s:2:"sr";s:10:"locale_all";s:11:"sr_RS.UTF-8";s:15:"htmlTag_langKey";s:2:"sr";s:12:"_LOCAL_LANG.";a:3:{s:3:"sr.";a:1:{s:7:"footer.";a:1:{s:7:"company";s:10:"Moja firma";}}s:3:"en.";a:1:{s:7:"footer.";a:1:{s:7:"company";s:10:"My company";}}s:3:"de.";a:1:{s:7:"footer.";a:1:{s:7:"company";s:11:"Meine Firma";}}}s:12:"absRefPrefix";s:4:"auto";s:7:"doctype";s:5:"html5";}}');
#