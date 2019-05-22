<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0bd047aa5058f04568aa38dfc5ac000
{
    public static $files = array (
        '958baf679ab014f6517c26661e8969b7' => __DIR__ . '/..' . '/cmb2/cmb2/init.php',
        'c137015539481e56a35f44f2d09649d5' => __DIR__ . '/../..' . '/includes/template-tags.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rollbar\\' => 8,
            'RankMath\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'MyThemeShop\\Helpers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rollbar\\' => 
        array (
            0 => __DIR__ . '/..' . '/rollbar/rollbar/src',
        ),
        'RankMath\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'MyThemeShop\\Helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src',
        ),
    );

    public static $classMap = array (
        'MyThemeShop\\Admin\\List_Table' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/admin/class-list-table.php',
        'MyThemeShop\\Admin\\Page' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/admin/class-page.php',
        'MyThemeShop\\Database\\Database' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-database.php',
        'MyThemeShop\\Database\\Escape' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-escape.php',
        'MyThemeShop\\Database\\GroupBy' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-groupby.php',
        'MyThemeShop\\Database\\OrderBy' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-orderby.php',
        'MyThemeShop\\Database\\Query_Builder' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-query-builder.php',
        'MyThemeShop\\Database\\Select' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-select.php',
        'MyThemeShop\\Database\\Translate' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-translate.php',
        'MyThemeShop\\Database\\Where' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/database/class-where.php',
        'MyThemeShop\\Helpers\\Arr' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-arr.php',
        'MyThemeShop\\Helpers\\Attachment' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-attachment.php',
        'MyThemeShop\\Helpers\\Conditional' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-conditional.php',
        'MyThemeShop\\Helpers\\DB' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-db.php',
        'MyThemeShop\\Helpers\\HTML' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-html.php',
        'MyThemeShop\\Helpers\\Str' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-str.php',
        'MyThemeShop\\Helpers\\Url' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-url.php',
        'MyThemeShop\\Helpers\\Util' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-util.php',
        'MyThemeShop\\Helpers\\WordPress' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/helpers/class-wordpress.php',
        'MyThemeShop\\Json_Manager' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/class-json-manager.php',
        'MyThemeShop\\Notification' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/class-notification.php',
        'MyThemeShop\\Notification_Center' => __DIR__ . '/..' . '/mythemeshop/wordpress-helpers/src/class-notification-center.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'RankMath\\Admin\\Admin' => __DIR__ . '/../..' . '/includes/admin/class-admin.php',
        'RankMath\\Admin\\Admin_Helper' => __DIR__ . '/../..' . '/includes/admin/class-admin-helper.php',
        'RankMath\\Admin\\Admin_Menu' => __DIR__ . '/../..' . '/includes/admin/class-admin-menu.php',
        'RankMath\\Admin\\Assets' => __DIR__ . '/../..' . '/includes/admin/class-assets.php',
        'RankMath\\Admin\\CMB2_Fields' => __DIR__ . '/../..' . '/includes/admin/class-cmb2-fields.php',
        'RankMath\\Admin\\Deactivate_Survey' => __DIR__ . '/../..' . '/includes/admin/class-deactivate-survey.php',
        'RankMath\\Admin\\Engine' => __DIR__ . '/../..' . '/includes/admin/class-engine.php',
        'RankMath\\Admin\\Import_Export' => __DIR__ . '/../..' . '/includes/admin/class-import-export.php',
        'RankMath\\Admin\\Importers\\AIOSEO' => __DIR__ . '/../..' . '/includes/admin/importers/class-aioseo.php',
        'RankMath\\Admin\\Importers\\AIO_Rich_Snippet' => __DIR__ . '/../..' . '/includes/admin/importers/class-aio-rich-snippet.php',
        'RankMath\\Admin\\Importers\\Detector' => __DIR__ . '/../..' . '/includes/admin/importers/class-detector.php',
        'RankMath\\Admin\\Importers\\Plugin_Importer' => __DIR__ . '/../..' . '/includes/admin/importers/abstract-importer.php',
        'RankMath\\Admin\\Importers\\Redirections' => __DIR__ . '/../..' . '/includes/admin/importers/class-redirections.php',
        'RankMath\\Admin\\Importers\\WP_Schema_Pro' => __DIR__ . '/../..' . '/includes/admin/importers/class-wp-schema-pro.php',
        'RankMath\\Admin\\Importers\\Yoast' => __DIR__ . '/../..' . '/includes/admin/importers/class-yoast.php',
        'RankMath\\Admin\\Metabox' => __DIR__ . '/../..' . '/includes/admin/class-metabox.php',
        'RankMath\\Admin\\Notices' => __DIR__ . '/../..' . '/includes/admin/class-notices.php',
        'RankMath\\Admin\\Option_Center' => __DIR__ . '/../..' . '/includes/admin/class-option-center.php',
        'RankMath\\Admin\\Options' => __DIR__ . '/../..' . '/includes/admin/class-options.php',
        'RankMath\\Admin\\Post_Columns' => __DIR__ . '/../..' . '/includes/admin/class-post-columns.php',
        'RankMath\\Admin\\Registration' => __DIR__ . '/../..' . '/includes/admin/class-registration.php',
        'RankMath\\Admin\\Serp_Checklist' => __DIR__ . '/../..' . '/includes/admin/class-serp-checklist.php',
        'RankMath\\Admin\\Serp_Preview' => __DIR__ . '/../..' . '/includes/admin/class-serp-preview.php',
        'RankMath\\Admin\\Setup_Wizard' => __DIR__ . '/../..' . '/includes/admin/class-setup-wizard.php',
        'RankMath\\Admin\\Watcher' => __DIR__ . '/../..' . '/includes/admin/watcher/class-watcher.php',
        'RankMath\\CLI\\Commands' => __DIR__ . '/../..' . '/includes/cli/class-commands.php',
        'RankMath\\CMB2' => __DIR__ . '/../..' . '/includes/class-cmb2.php',
        'RankMath\\Common' => __DIR__ . '/../..' . '/includes/class-common.php',
        'RankMath\\Compatibility' => __DIR__ . '/../..' . '/includes/class-compatibility.php',
        'RankMath\\Frontend\\Add_Attributes' => __DIR__ . '/../..' . '/includes/frontend/class-add-attributes.php',
        'RankMath\\Frontend\\Breadcrumbs' => __DIR__ . '/../..' . '/includes/frontend/class-breadcrumbs.php',
        'RankMath\\Frontend\\Frontend' => __DIR__ . '/../..' . '/includes/frontend/class-frontend.php',
        'RankMath\\Frontend\\Generate' => __DIR__ . '/../..' . '/includes/frontend/class-generate.php',
        'RankMath\\Frontend\\Head' => __DIR__ . '/../..' . '/includes/frontend/class-head.php',
        'RankMath\\Frontend\\Remove_Reply_To_Com' => __DIR__ . '/../..' . '/includes/frontend/class-remove-reply-to-com.php',
        'RankMath\\Frontend\\Shortcodes' => __DIR__ . '/../..' . '/includes/frontend/class-shortcodes.php',
        'RankMath\\Helper' => __DIR__ . '/../..' . '/includes/class-helper.php',
        'RankMath\\Helpers\\Api' => __DIR__ . '/../..' . '/includes/helpers/class-api.php',
        'RankMath\\Helpers\\Attachment' => __DIR__ . '/../..' . '/includes/helpers/class-attachment.php',
        'RankMath\\Helpers\\Choices' => __DIR__ . '/../..' . '/includes/helpers/class-choices.php',
        'RankMath\\Helpers\\Conditional' => __DIR__ . '/../..' . '/includes/helpers/class-conditional.php',
        'RankMath\\Helpers\\Options' => __DIR__ . '/../..' . '/includes/helpers/class-options.php',
        'RankMath\\Helpers\\Post_Type' => __DIR__ . '/../..' . '/includes/helpers/class-post-type.php',
        'RankMath\\Helpers\\Taxonomy' => __DIR__ . '/../..' . '/includes/helpers/class-taxonomy.php',
        'RankMath\\Helpers\\WordPress' => __DIR__ . '/../..' . '/includes/helpers/class-wordpress.php',
        'RankMath\\Installer' => __DIR__ . '/../..' . '/includes/class-installer.php',
        'RankMath\\KB' => __DIR__ . '/../..' . '/includes/class-kb.php',
        'RankMath\\Links\\ContentProcessor' => __DIR__ . '/../..' . '/includes/modules/links/class-contentprocessor.php',
        'RankMath\\Links\\Link' => __DIR__ . '/../..' . '/includes/modules/links/class-link.php',
        'RankMath\\Links\\Links' => __DIR__ . '/../..' . '/includes/modules/links/class-links.php',
        'RankMath\\Links\\Storage' => __DIR__ . '/../..' . '/includes/modules/links/class-storage.php',
        'RankMath\\Local_Seo\\Local_Seo' => __DIR__ . '/../..' . '/includes/modules/local-seo/class-local-seo.php',
        'RankMath\\Metadata' => __DIR__ . '/../..' . '/includes/class-metadata.php',
        'RankMath\\Module' => __DIR__ . '/../..' . '/includes/class-module.php',
        'RankMath\\Module_Manager' => __DIR__ . '/../..' . '/includes/class-module-manager.php',
        'RankMath\\Monitor\\Admin' => __DIR__ . '/../..' . '/includes/modules/404-monitor/class-admin.php',
        'RankMath\\Monitor\\DB' => __DIR__ . '/../..' . '/includes/modules/404-monitor/class-db.php',
        'RankMath\\Monitor\\Monitor' => __DIR__ . '/../..' . '/includes/modules/404-monitor/class-monitor.php',
        'RankMath\\Monitor\\Table' => __DIR__ . '/../..' . '/includes/modules/404-monitor/class-table.php',
        'RankMath\\OpenGraph\\Facebook' => __DIR__ . '/../..' . '/includes/opengraph/class-facebook.php',
        'RankMath\\OpenGraph\\Image' => __DIR__ . '/../..' . '/includes/opengraph/class-image.php',
        'RankMath\\OpenGraph\\OpenGraph' => __DIR__ . '/../..' . '/includes/opengraph/class-opengraph.php',
        'RankMath\\OpenGraph\\Twitter' => __DIR__ . '/../..' . '/includes/opengraph/class-twitter.php',
        'RankMath\\Post' => __DIR__ . '/../..' . '/includes/class-post.php',
        'RankMath\\Redirections\\Admin' => __DIR__ . '/../..' . '/includes/modules/redirections/class-admin.php',
        'RankMath\\Redirections\\Cache' => __DIR__ . '/../..' . '/includes/modules/redirections/class-cache.php',
        'RankMath\\Redirections\\DB' => __DIR__ . '/../..' . '/includes/modules/redirections/class-db.php',
        'RankMath\\Redirections\\Export' => __DIR__ . '/../..' . '/includes/modules/redirections/class-export.php',
        'RankMath\\Redirections\\Form' => __DIR__ . '/../..' . '/includes/modules/redirections/class-form.php',
        'RankMath\\Redirections\\Metabox' => __DIR__ . '/../..' . '/includes/modules/redirections/class-metabox.php',
        'RankMath\\Redirections\\Redirection' => __DIR__ . '/../..' . '/includes/modules/redirections/class-redirection.php',
        'RankMath\\Redirections\\Redirections' => __DIR__ . '/../..' . '/includes/modules/redirections/class-redirections.php',
        'RankMath\\Redirections\\Redirector' => __DIR__ . '/../..' . '/includes/modules/redirections/class-redirector.php',
        'RankMath\\Redirections\\Table' => __DIR__ . '/../..' . '/includes/modules/redirections/class-table.php',
        'RankMath\\Redirections\\Watcher' => __DIR__ . '/../..' . '/includes/modules/redirections/class-watcher.php',
        'RankMath\\Replace_Vars' => __DIR__ . '/../..' . '/includes/class-replace-vars.php',
        'RankMath\\Rest\\Admin' => __DIR__ . '/../..' . '/includes/rest/class-admin.php',
        'RankMath\\Rest\\Helper' => __DIR__ . '/../..' . '/includes/rest/class-helper.php',
        'RankMath\\Rewrite' => __DIR__ . '/../..' . '/includes/class-rewrite.php',
        'RankMath\\RichSnippet\\Admin' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/class-admin.php',
        'RankMath\\RichSnippet\\Article' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-article.php',
        'RankMath\\RichSnippet\\Author' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-author.php',
        'RankMath\\RichSnippet\\Blog' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-blog.php',
        'RankMath\\RichSnippet\\Book' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-book.php',
        'RankMath\\RichSnippet\\Breadcrumbs' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-breadcrumbs.php',
        'RankMath\\RichSnippet\\Collection_Page' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-collection-page.php',
        'RankMath\\RichSnippet\\Course' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-course.php',
        'RankMath\\RichSnippet\\Event' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-event.php',
        'RankMath\\RichSnippet\\JobPosting' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-jobposting.php',
        'RankMath\\RichSnippet\\JsonLD' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/class-jsonld.php',
        'RankMath\\RichSnippet\\Local' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-local.php',
        'RankMath\\RichSnippet\\Music' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-music.php',
        'RankMath\\RichSnippet\\Person' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-person.php',
        'RankMath\\RichSnippet\\Product' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-product.php',
        'RankMath\\RichSnippet\\Product_Edd' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-product-edd.php',
        'RankMath\\RichSnippet\\Product_WooCommerce' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-product-woocommerce.php',
        'RankMath\\RichSnippet\\Products_Page' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-products-page.php',
        'RankMath\\RichSnippet\\Recipe' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-recipe.php',
        'RankMath\\RichSnippet\\Restaurant' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-restaurant.php',
        'RankMath\\RichSnippet\\Review' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-review.php',
        'RankMath\\RichSnippet\\RichSnippet' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/class-richsnippet.php',
        'RankMath\\RichSnippet\\Search_Results' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-search-results.php',
        'RankMath\\RichSnippet\\Service' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-service.php',
        'RankMath\\RichSnippet\\Singular' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-singular.php',
        'RankMath\\RichSnippet\\Snippet' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/interface-snippet.php',
        'RankMath\\RichSnippet\\Software' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-software.php',
        'RankMath\\RichSnippet\\Video' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-video.php',
        'RankMath\\RichSnippet\\WC_Attributes' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-wc-attributes.php',
        'RankMath\\RichSnippet\\Website' => __DIR__ . '/../..' . '/includes/modules/rich-snippet/snippets/class-website.php',
        'RankMath\\Role_Manager\\Capability_Manager' => __DIR__ . '/../..' . '/includes/modules/role-manager/class-capability-manager.php',
        'RankMath\\Role_Manager\\Members' => __DIR__ . '/../..' . '/includes/modules/role-manager/class-members.php',
        'RankMath\\Role_Manager\\Role_Manager' => __DIR__ . '/../..' . '/includes/modules/role-manager/class-role-manager.php',
        'RankMath\\Role_Manager\\User_Role_Editor' => __DIR__ . '/../..' . '/includes/modules/role-manager/class-user-role-editor.php',
        'RankMath\\Rollbar' => __DIR__ . '/../..' . '/includes/class-rollbar.php',
        'RankMath\\Runner' => __DIR__ . '/../..' . '/includes/interface-runner.php',
        'RankMath\\SEO_Analysis\\Admin' => __DIR__ . '/../..' . '/includes/modules/seo-analysis/class-admin.php',
        'RankMath\\SEO_Analysis\\SEO_Analysis' => __DIR__ . '/../..' . '/includes/modules/seo-analysis/class-seo-analysis.php',
        'RankMath\\SEO_Analysis\\SEO_Analyzer' => __DIR__ . '/../..' . '/includes/modules/seo-analysis/class-seo-analyzer.php',
        'RankMath\\Search_Console\\Analytics' => __DIR__ . '/../..' . '/includes/modules/search-console/class-analytics.php',
        'RankMath\\Search_Console\\Analytics_List' => __DIR__ . '/../..' . '/includes/modules/search-console/class-analytics-list.php',
        'RankMath\\Search_Console\\Client' => __DIR__ . '/../..' . '/includes/modules/search-console/class-client.php',
        'RankMath\\Search_Console\\DB' => __DIR__ . '/../..' . '/includes/modules/search-console/class-db.php',
        'RankMath\\Search_Console\\Data_Fetcher' => __DIR__ . '/../..' . '/includes/modules/search-console/class-data-fetcher.php',
        'RankMath\\Search_Console\\Overview' => __DIR__ . '/../..' . '/includes/modules/search-console/class-overview.php',
        'RankMath\\Search_Console\\Search_Console' => __DIR__ . '/../..' . '/includes/modules/search-console/class-search-console.php',
        'RankMath\\Search_Console\\Search_Console_Common' => __DIR__ . '/../..' . '/includes/modules/search-console/class-search-console-common.php',
        'RankMath\\Search_Console\\Sitemaps' => __DIR__ . '/../..' . '/includes/modules/search-console/class-sitemaps.php',
        'RankMath\\Search_Console\\Sitemaps_List' => __DIR__ . '/../..' . '/includes/modules/search-console/class-sitemaps-list.php',
        'RankMath\\Settings' => __DIR__ . '/../..' . '/includes/class-settings.php',
        'RankMath\\Sitemap\\Admin' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-admin.php',
        'RankMath\\Sitemap\\Cache' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-cache.php',
        'RankMath\\Sitemap\\Cache_Watcher' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-cache-watcher.php',
        'RankMath\\Sitemap\\Classifier' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-classifier.php',
        'RankMath\\Sitemap\\Generator' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-generator.php',
        'RankMath\\Sitemap\\Image_Parser' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-image-parser.php',
        'RankMath\\Sitemap\\Providers\\Author' => __DIR__ . '/../..' . '/includes/modules/sitemap/providers/class-author.php',
        'RankMath\\Sitemap\\Providers\\Post_Type' => __DIR__ . '/../..' . '/includes/modules/sitemap/providers/class-post-type.php',
        'RankMath\\Sitemap\\Providers\\Provider' => __DIR__ . '/../..' . '/includes/modules/sitemap/providers/interface-provider.php',
        'RankMath\\Sitemap\\Providers\\Taxonomy' => __DIR__ . '/../..' . '/includes/modules/sitemap/providers/class-taxonomy.php',
        'RankMath\\Sitemap\\Router' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-router.php',
        'RankMath\\Sitemap\\Sitemap' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-sitemap.php',
        'RankMath\\Sitemap\\Sitemap_XML' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-sitemap-xml.php',
        'RankMath\\Sitemap\\Stylesheet' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-stylesheet.php',
        'RankMath\\Sitemap\\Timezone' => __DIR__ . '/../..' . '/includes/modules/sitemap/class-timezone.php',
        'RankMath\\Sitemap\\XML' => __DIR__ . '/../..' . '/includes/modules/sitemap/abstract-xml.php',
        'RankMath\\Term' => __DIR__ . '/../..' . '/includes/class-term.php',
        'RankMath\\Tracking' => __DIR__ . '/../..' . '/includes/class-tracking.php',
        'RankMath\\Traits\\Ajax' => __DIR__ . '/../..' . '/includes/traits/class-ajax.php',
        'RankMath\\Traits\\Hooker' => __DIR__ . '/../..' . '/includes/traits/class-hooker.php',
        'RankMath\\Traits\\Replacement' => __DIR__ . '/../..' . '/includes/traits/class-replacement.php',
        'RankMath\\Traits\\Shortcode' => __DIR__ . '/../..' . '/includes/traits/class-shortcode.php',
        'RankMath\\Traits\\Wizard' => __DIR__ . '/../..' . '/includes/traits/class-wizard.php',
        'RankMath\\Updates' => __DIR__ . '/../..' . '/includes/class-updates.php',
        'RankMath\\User' => __DIR__ . '/../..' . '/includes/class-user.php',
        'RankMath\\Wizard\\Compatibility' => __DIR__ . '/../..' . '/includes/admin/wizard/class-compatibility.php',
        'RankMath\\Wizard\\Import' => __DIR__ . '/../..' . '/includes/admin/wizard/class-import.php',
        'RankMath\\Wizard\\Misc' => __DIR__ . '/../..' . '/includes/admin/wizard/class-misc.php',
        'RankMath\\Wizard\\Monitor_Redirection' => __DIR__ . '/../..' . '/includes/admin/wizard/class-monitor-redirection.php',
        'RankMath\\Wizard\\Optimization' => __DIR__ . '/../..' . '/includes/admin/wizard/class-optimization.php',
        'RankMath\\Wizard\\Ready' => __DIR__ . '/../..' . '/includes/admin/wizard/class-ready.php',
        'RankMath\\Wizard\\Role' => __DIR__ . '/../..' . '/includes/admin/wizard/class-role.php',
        'RankMath\\Wizard\\Search_Console' => __DIR__ . '/../..' . '/includes/admin/wizard/class-search-console.php',
        'RankMath\\Wizard\\Sitemap' => __DIR__ . '/../..' . '/includes/admin/wizard/class-sitemap.php',
        'RankMath\\Wizard\\Wizard_Step' => __DIR__ . '/../..' . '/includes/admin/wizard/interface-wizard-step.php',
        'RankMath\\Wizard\\Your_Site' => __DIR__ . '/../..' . '/includes/admin/wizard/class-your-site.php',
        'RankMath\\WooCommerce\\Admin' => __DIR__ . '/../..' . '/includes/modules/woocommerce/class-admin.php',
        'RankMath\\WooCommerce\\WooCommerce' => __DIR__ . '/../..' . '/includes/modules/woocommerce/class-woocommerce.php',
        'Rollbar\\Config' => __DIR__ . '/..' . '/rollbar/rollbar/src/Config.php',
        'Rollbar\\DataBuilder' => __DIR__ . '/..' . '/rollbar/rollbar/src/DataBuilder.php',
        'Rollbar\\DataBuilderInterface' => __DIR__ . '/..' . '/rollbar/rollbar/src/DataBuilderInterface.php',
        'Rollbar\\Defaults' => __DIR__ . '/..' . '/rollbar/rollbar/src/Defaults.php',
        'Rollbar\\ErrorWrapper' => __DIR__ . '/..' . '/rollbar/rollbar/src/ErrorWrapper.php',
        'Rollbar\\FilterInterface' => __DIR__ . '/..' . '/rollbar/rollbar/src/FilterInterface.php',
        'Rollbar\\Handlers\\AbstractHandler' => __DIR__ . '/..' . '/rollbar/rollbar/src/Handlers/AbstractHandler.php',
        'Rollbar\\Handlers\\ErrorHandler' => __DIR__ . '/..' . '/rollbar/rollbar/src/Handlers/ErrorHandler.php',
        'Rollbar\\Handlers\\ExceptionHandler' => __DIR__ . '/..' . '/rollbar/rollbar/src/Handlers/ExceptionHandler.php',
        'Rollbar\\Handlers\\FatalHandler' => __DIR__ . '/..' . '/rollbar/rollbar/src/Handlers/FatalHandler.php',
        'Rollbar\\LevelFactory' => __DIR__ . '/..' . '/rollbar/rollbar/src/LevelFactory.php',
        'Rollbar\\Monolog\\Handler\\RollbarHandler' => __DIR__ . '/..' . '/rollbar/rollbar/src/Monolog/Handler/RollbarHandler.php',
        'Rollbar\\Payload\\Body' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Body.php',
        'Rollbar\\Payload\\ContentInterface' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/ContentInterface.php',
        'Rollbar\\Payload\\Context' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Context.php',
        'Rollbar\\Payload\\Data' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Data.php',
        'Rollbar\\Payload\\EncodedPayload' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/EncodedPayload.php',
        'Rollbar\\Payload\\ExceptionInfo' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/ExceptionInfo.php',
        'Rollbar\\Payload\\Frame' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Frame.php',
        'Rollbar\\Payload\\Level' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Level.php',
        'Rollbar\\Payload\\Message' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Message.php',
        'Rollbar\\Payload\\Notifier' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Notifier.php',
        'Rollbar\\Payload\\Payload' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Payload.php',
        'Rollbar\\Payload\\Person' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Person.php',
        'Rollbar\\Payload\\Request' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Request.php',
        'Rollbar\\Payload\\Server' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Server.php',
        'Rollbar\\Payload\\Trace' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/Trace.php',
        'Rollbar\\Payload\\TraceChain' => __DIR__ . '/..' . '/rollbar/rollbar/src/Payload/TraceChain.php',
        'Rollbar\\Response' => __DIR__ . '/..' . '/rollbar/rollbar/src/Response.php',
        'Rollbar\\ResponseHandlerInterface' => __DIR__ . '/..' . '/rollbar/rollbar/src/ResponseHandlerInterface.php',
        'Rollbar\\Rollbar' => __DIR__ . '/..' . '/rollbar/rollbar/src/Rollbar.php',
        'Rollbar\\RollbarJsHelper' => __DIR__ . '/..' . '/rollbar/rollbar/src/RollbarJsHelper.php',
        'Rollbar\\RollbarLogger' => __DIR__ . '/..' . '/rollbar/rollbar/src/RollbarLogger.php',
        'Rollbar\\Scrubber' => __DIR__ . '/..' . '/rollbar/rollbar/src/Scrubber.php',
        'Rollbar\\ScrubberInterface' => __DIR__ . '/..' . '/rollbar/rollbar/src/ScrubberInterface.php',
        'Rollbar\\Senders\\AgentSender' => __DIR__ . '/..' . '/rollbar/rollbar/src/Senders/AgentSender.php',
        'Rollbar\\Senders\\CurlSender' => __DIR__ . '/..' . '/rollbar/rollbar/src/Senders/CurlSender.php',
        'Rollbar\\Senders\\FluentSender' => __DIR__ . '/..' . '/rollbar/rollbar/src/Senders/FluentSender.php',
        'Rollbar\\Senders\\SenderInterface' => __DIR__ . '/..' . '/rollbar/rollbar/src/Senders/SenderInterface.php',
        'Rollbar\\TransformerInterface' => __DIR__ . '/..' . '/rollbar/rollbar/src/TransformerInterface.php',
        'Rollbar\\Truncation\\AbstractStrategy' => __DIR__ . '/..' . '/rollbar/rollbar/src/Truncation/AbstractStrategy.php',
        'Rollbar\\Truncation\\FramesStrategy' => __DIR__ . '/..' . '/rollbar/rollbar/src/Truncation/FramesStrategy.php',
        'Rollbar\\Truncation\\IStrategy' => __DIR__ . '/..' . '/rollbar/rollbar/src/Truncation/IStrategy.php',
        'Rollbar\\Truncation\\MinBodyStrategy' => __DIR__ . '/..' . '/rollbar/rollbar/src/Truncation/MinBodyStrategy.php',
        'Rollbar\\Truncation\\RawStrategy' => __DIR__ . '/..' . '/rollbar/rollbar/src/Truncation/RawStrategy.php',
        'Rollbar\\Truncation\\StringsStrategy' => __DIR__ . '/..' . '/rollbar/rollbar/src/Truncation/StringsStrategy.php',
        'Rollbar\\Truncation\\Truncation' => __DIR__ . '/..' . '/rollbar/rollbar/src/Truncation/Truncation.php',
        'Rollbar\\Utilities' => __DIR__ . '/..' . '/rollbar/rollbar/src/Utilities.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0bd047aa5058f04568aa38dfc5ac000::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0bd047aa5058f04568aa38dfc5ac000::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0bd047aa5058f04568aa38dfc5ac000::$classMap;

        }, null, ClassLoader::class);
    }
}
