<?php
return unserialize('a:9:{s:26:"pagesTsConfig-package-core";a:2:{s:8:"filename";s:77:"C:/wamp64/www/pvc_stolarija/vendor/typo3/cms-core/Configuration/page.tsconfig";s:7:"content";s:46:"TCEMAIN.translateToMessage = Translate to %s:
";}s:29:"pagesTsConfig-package-backend";a:2:{s:8:"filename";s:80:"C:/wamp64/www/pvc_stolarija/vendor/typo3/cms-backend/Configuration/page.tsconfig";s:7:"content";s:1990:"# Register default link handlers
TCEMAIN.linkHandler {
  page {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\PageLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:page
  }
  url {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\UrlLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:extUrl
    displayAfter = page,file,folder
    scanAfter = telephone
  }
  email {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\MailLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:email
    displayAfter = page,file,folder,url
    scanBefore = url
  }
  telephone {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\TelephoneLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:telephone
    displayAfter = page,file,folder,url,mail
    scanBefore = url
  }
}

mod.web_list {
  enableClipBoard = selectable
  tableDisplayOrder {
    be_users.after = be_groups
    sys_filemounts.after = be_users
    sys_file_storage.after = sys_filemounts
    fe_users.after = fe_groups
    fe_users.before = pages
    sys_template.after = pages
    backend_layout.after = pages
    tt_content.after = pages,backend_layout,sys_template
    sys_category.after = tt_content
  }
  searchLevel.items {
    -1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.infinite
    0 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.0
    1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.1
    2 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.2
    3 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.3
    4 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.4
  }
}

# dummy placeholders for item groups
mod.wizards {
  newRecord.pages.show {
    pageInside = 1
    pageAfter = 1
    pageSelectPosition = 1
  }
}
";}s:30:"pagesTsConfig-package-frontend";a:2:{s:8:"filename";s:81:"C:/wamp64/www/pvc_stolarija/vendor/typo3/cms-frontend/Configuration/page.tsconfig";s:7:"content";s:124:"TCEFORM.tt_content {
  imageorient {
    types {
      image {
        removeItems = 8,9,10,17,18,25,26
      }
    }
  }
}
";}s:30:"pagesTsConfig-package-filelist";a:2:{s:8:"filename";s:81:"C:/wamp64/www/pvc_stolarija/vendor/typo3/cms-filelist/Configuration/page.tsconfig";s:7:"content";s:477:"# Register link handlers
TCEMAIN.linkHandler {
  file {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FileLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:file
    displayAfter = page
    scanAfter = page
  }
  folder {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FolderLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:folder
    displayAfter = page,file
    scanAfter = page,file
  }
}
";}s:25:"pagesTsConfig-package-seo";a:2:{s:8:"filename";s:76:"C:/wamp64/www/pvc_stolarija/vendor/typo3/cms-seo/Configuration/page.tsconfig";s:7:"content";s:431:"mod.web_info.fieldDefinitions {
  seo {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:seo
    fields = title,uid,slug,seo_title,description,no_index,no_follow,canonical_link,sitemap_changefreq,sitemap_priority
  }
  social_media {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:social_media
    fields = title,uid,og_title,og_description,twitter_title,twitter_description
  }
}
";}s:26:"pagesTsConfig-package-info";a:2:{s:8:"filename";s:77:"C:/wamp64/www/pvc_stolarija/vendor/typo3/cms-info/Configuration/page.tsconfig";s:7:"content";s:771:"mod.web_info.fieldDefinitions {
    0 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_0
        fields = title,uid,slug,starttime,endtime,fe_group,target,url,shortcut,shortcut_mode
    }
    1 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_1
        fields = title,uid,###ALL_TABLES###
    }
    2 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_2
        fields = title,uid,lastUpdated,newUntil,cache_timeout,php_tree_stop,TSconfig,is_siteroot
    }
    3 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_layouts
        fields = title,uid,actual_backend_layout,backend_layout,backend_layout_next_level,layout
    }
}
";}s:30:"pagesTsConfig-package-viewpage";a:2:{s:8:"filename";s:81:"C:/wamp64/www/pvc_stolarija/vendor/typo3/cms-viewpage/Configuration/page.tsconfig";s:7:"content";s:1055:"mod.web_view.previewFrameWidths {
    phone {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:mobile
        type = mobile
        width = 390
        height = 844
    }
    tabletPortrait {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:tabletPortrait
        type = tablet
        width = 768
        height = 1024
    }
    tabletLandscape {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:tabletLandscape
        type = tablet
        width = 1024
        height = 768
    }
    1280 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1280
        height = 1024
    }
    1440 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1440
        height = 1024
    }
    1920 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1920
        height = 1080
    }
}
";}s:26:"pagesTsConfig-package-news";a:2:{s:8:"filename";s:79:"C:/wamp64/www/pvc_stolarija/vendor/georgringer/news/Configuration/page.tsconfig";s:7:"content";s:136:"mod.linkvalidator.searchFields {
    tx_news_domain_model_news = bodytext,internalurl,externalurl
    tx_news_domain_model_link = uri
}
";}s:34:"pagesTsConfig-package-site_package";a:2:{s:8:"filename";s:80:"C:/wamp64/www/pvc_stolarija/vendor/site/site-package/Configuration/page.tsconfig";s:7:"content";s:2487:"mod.web_layout.BackendLayouts {
    main {
        title = Main one colum Layout
        identifier = main
        config {
            backend_layout {
                colCount = 3
                rowCount = 3
                rows {
                    1 {
                        columns {
                            1 {
                                name = Main
                                colPos = 0
                                colspan = 3
                            }
                        }
                    }
                }
            }
        }
    }
    two_column {
        title = Trokolumni raspored
        identifier = two_column
        config {
            backend_layout {
                colCount = 2
                rowCount = 2
                rows {
                    1 {
                        columns {
                            1 {
                                name = Gornja kolona
                                colPos = 0
                                colspan = 2
                            }
                        }
                    }
                    2 {
                        columns {
                            1 {
                                name = Leva kolona
                                colPos = 1
                            }
                            2 {
                                name = Desna kolona
                                colPos = 2
                            }
                        }
                    }
                }
            }
        }
    }
}


# Enable SEO & Social Tabs
TCEFORM.pages {
  seo_title.disabled = 0
  seo_description.disabled = 0
  canonical_link.disabled = 0
  no_index.disabled = 0
  no_follow.disabled = 0
  og_title.disabled = 0
  og_description.disabled = 0
  og_image.disabled = 0
  twitter_title.disabled = 0
  twitter_description.disabled = 0
  twitter_image.disabled = 0
}

tx_news.templateLayouts {
      1 = List Layout 1
      2 = List Layout 2
      3 = List Layout 3
      4 = Detail Layout 1
      5 = Detail Layout 2
      6 = Detail Layout 3
}

mod.wizards.newContentElement.wizardItems.common {
    elements {
        map_contact_form {
            iconIdentifier = content-text
            title = Map & Contact Form
            description = Adds Google Map with a contact form
            tt_content_defValues {
                CType = map_contact_form
            }
        }
    }
    show := addToList(map_contact_form)
}
";}}');
#